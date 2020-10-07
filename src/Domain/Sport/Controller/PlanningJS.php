<?php


namespace App\Domain\Sport\Controller;


use App\Application\Entity\Human;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\SerializerInterface;

class PlanningJS
{

    /**
     * @param SerializerInterface $serializer
     * @param Filesystem $filesystem
     * @param EntityManagerInterface $entityManager
     * @param Security $security
     * @return JsonResponse
     */
    public function __invoke(SerializerInterface $serializer,
                             Filesystem $filesystem,
                             EntityManagerInterface $entityManager,
                             Security $security)
    {
        $human = $entityManager->getRepository(Human::class)->findOneBy(["user" => $security->getUser()->getId()]);

        $fileCheck = new File("../src/Application/FileControlHuman/human{$human->getId()}.json");
        $file = \file_get_contents($fileCheck);
        $humanoJson = $serializer->deserialize($file, human::class, "json");
        $infoPlanning = $humanoJson->getInformationPlanning();
        $objectif = $human->getGoalType();
        $information = [$infoPlanning, $objectif];

        $information = json_encode($information);

        return new JsonResponse($information, JsonResponse::HTTP_OK, [], true);
    }

}