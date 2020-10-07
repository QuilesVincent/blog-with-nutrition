<?php


namespace App\Domain\Sport\Controller;


use App\Application\Entity\Human;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\File\File;

class SaveNewPlanningJS
{

    /**
     * @param SerializerInterface $serializer
     * @param Filesystem $filesystem
     * @param EntityManagerInterface $entityManager
     * @param Security $security
     * @param Request $request
     * @return Response
     */
    public function __invoke(SerializerInterface $serializer,
                             Filesystem $filesystem,
                             EntityManagerInterface $entityManager,
                             Security $security, Request $request)
    {

        $human = $entityManager->getRepository(Human::class)->findOneBy(["user" => $security->getUser()->getId()]);

        $fileCheck = new File("../src/Application/FileControlHuman/human{$human->getId()}.json");
        $file = \file_get_contents($fileCheck);
        $humanoJson = $serializer->deserialize($file, Human::class, "json");

        $check = true;
        $increment = 0;
        if ($humanoJson->getInformationPlanning() !== null) {
            $arrayContener = $humanoJson->getInformationPlanning();
        } else {
            $arrayContener = [];
        }

        while ($check) {
            if ($request->request->has("data$increment")) {
                $dataPlanningSendByJavascript = $request->request->get("data$increment");
                $arrayDataPlanningSendByJavascript = explode(",", $dataPlanningSendByJavascript);
                $lineData = $arrayDataPlanningSendByJavascript[1];
                $dateData = $arrayDataPlanningSendByJavascript[5];
                for ($i = 0; $i < count($arrayContener); $i++) {
                    $arrayOneElement = explode(",", $arrayContener[$i]);
                    if ($arrayOneElement[0] !== "" && $arrayOneElement[1] === $lineData && $arrayOneElement[5] === $dateData) {
                        $arrayContener[$i] = "";
                    }
                }
                array_push($arrayContener, $dataPlanningSendByJavascript);
            } else {
                $check = false;
            }
            $increment++;
        }

        $humanoJson->setInformationPlanning($arrayContener);

        if ($filesystem->exists("../src/Application/FileControlHuman/human{$humanoJson->getId()}.json")) {
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

        return new Response(json_encode($humanoJson->getInformationPlanning()));

        //return new JsonResponse("succes hacker", JsonResponse::HTTP_OK, [], true);
    }

}