<?php


namespace App\Domain\Sport\Controller;


use App\Application\Entity\Human;
use App\Domain\Sport\Handler\HumanHandler;
use App\Domain\Sport\Presenter\FirstWeekControlPresenterInterface;
use App\Domain\Sport\Responder\FirstWeekControlResponder;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Util\Json;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\SerializerInterface;

class WeekControlChangeDateNextControlAfterNo
{
    /**
     * @param Request $request
     * @param HumanHandler $humanHandler
     * @param UrlGeneratorInterface $urlGenerator
     * @param EntityManagerInterface $entityManager
     * @param FirstWeekControlPresenterInterface $firstWeekControlPresenter
     * @param Security $security
     * @param Filesystem $filesystem
     * @param SerializerInterface $serializer
     * @return Response
     */
    public function __invoke(Request $request,
                             HumanHandler $humanHandler,
                             UrlGeneratorInterface $urlGenerator,
                             EntityManagerInterface $entityManager,
                             FirstWeekControlPresenterInterface $firstWeekControlPresenter,
                             Security $security,
                             Filesystem $filesystem,
                             SerializerInterface $serializer): Response
    {

        $human = $entityManager->getRepository(Human::class)->findOneBy(["user" => $security->getUser()->getId()]);

        $newDate = new DateTimeImmutable();

        $dateAfter7days = $newDate->modify("+ 7 day");

        $human->setDateNextControl($dateAfter7days);

        $entityManager->flush();


        if ($filesystem->exists("../src/Application/FileControlHuman/human{$human->getId()}.json")) {
            /**
             *
             */
            $fileCheck = new File("../src/Application/FileControlHuman/human{$human->getId()}.json");
            $file = \file_get_contents($fileCheck);
            $humanoJson = $serializer->deserialize($file, human::class, "json");


            $humanoJson->setDateNextControl($dateAfter7days);

            $humanJson = $serializer->serialize(
                $humanoJson,
                "json",
                [
                    "circular_reference_handler" => function ($object) {
                        return $object->getId();
                    }
                ]
            );
            $humanJsonTraficed = sprintf("%s", $humanJson);
            $filesystem->dumpFile("../src/Application/FileControlHuman/human{$humanoJson->getId()}.json", $humanJsonTraficed);
        };

        return new Response(json_encode("succès"));
    }
}