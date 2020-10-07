<?php


namespace App\Domain\Sport\Controller;


use App\Application\Entity\Human;
use App\Domain\Sport\Handler\HumanHandler;
use App\Domain\Sport\Presenter\FirstWeekControlPresenterInterface;
use App\Domain\Sport\Responder\FirstWeekControlResponder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\SerializerInterface;

class FirstWeekControl
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

        if ($humanHandler->handle($request, $human)) {
            if ($filesystem->exists("../src/Application/FileControlHuman/human{$human->getId()}.json")) {
                /**
                 *
                 */
                $fileCheck = new File("../src/Application/FileControlHuman/human{$human->getId()}.json");
                $file = \file_get_contents($fileCheck);
                $humanoJson = $serializer->deserialize($file, human::class, "json");

                $humanoJson->setNewDateControlNotYetSave($human->getDateLastControl());
                $humanoJson->setDateLastControl($human->getDateLastControl());
                $humanoJson->setWeightControlNotYetSave($human->getWeightControlLastWeek());
                $humanoJson->setChestSizeControlNotYetSave($human->getChestSizeControlLastWeek());
                $humanoJson->setWaistSizeControlNotYetSave($human->getWaistSizeControlLastWeek());
                $humanoJson->setLegCircumferenceControlNotYetSave($human->getLegCircumferenceControlLastWeek());
                $humanoJson->setDateNextControl();

                $arrayWeightControl = $humanoJson->getAllWeightControl();

                if (
                    $arrayWeightControl[count($arrayWeightControl) - 1] <= $human->getWeightControlLastWeek()
                    &&
                    $human->getTotalCaloriesNeeded() > $human->getMetabolism() * 0.9
                ) {
                    $human->setNewTotalCaloriesNeededAfterControl();
                    $human->setDateNextControl();
                    $entityManager->flush();
                    $humanoJson->setNewTotalCaloriesNeededAfterControl();
                }

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
            /**
             *
             */
            return $firstWeekControlPresenter->redirect($urlGenerator);
            //Faire dans le formType, une case résultat.
            //En fonction de ce résultat, faire des changements
        }

        return $firstWeekControlPresenter->present(new FirstWeekControlResponder($humanHandler->createView()));
    }
}