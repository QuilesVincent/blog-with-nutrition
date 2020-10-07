<?php


namespace App\Domain\Api\Controller;


use App\Application\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CreateArticleApi extends AbstractApiController
{

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    public function __invoke(Request $request, EntityManagerInterface $entityManager): Response
    {
        $article = $request->getContent();


        $dataJson = $this->serializer->serialize(
            $article,
            "json",
            [
                "circular_reference_handler" => function ($object) {
                    return $object->getId();
                }
            ]
        );
        $data = $this->serializer->deserialize($dataJson, Article::class, "json");

        $entityManager->persist($data);
        $entityManager->flush();

        $response = new Response($dataJson);
        $response->headers->set("Content-type", "application/json");

        return $response;


    }

}