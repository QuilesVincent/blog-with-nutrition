<?php


namespace App\Domain\Sport\Controller;


use App\Application\Entity\Human;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio1;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio2;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio1 as SportsProgramCardio1Intermediate;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio2 as SporstProgramCardio2Intermediate;
use App\Domain\Sport\Presenter\TrainingIndexPlanningJavascriptPresenterInterface;
use App\Domain\Sport\Presenter\TrainingIndexPresenterInterface;
use App\Domain\Sport\Responder\TrainingIndexPlanningJavascriptResponder;
use App\Domain\Sport\Responder\TrainingIndexResponder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;

class TrainingIndexPlanningJavascript
{

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param TrainingIndexPlanningJavascriptPresenterInterface $trainingIndexPlanningJavascriptPresenter
     * @param Security $security
     * @param UrlGeneratorInterface $urlGenerator
     * @param SportsProgramCardio1 $sportsProgramCardio1
     * @param SportsProgramCardio1Intermediate $sportsProgramCardio1Intermediate
     * @param SportsProgramCardio2 $sportsProgramCardio2
     * @param SporstProgramCardio2Intermediate $sportsProgramCardio2Intermediate
     * @return Response
     */
    public function __invoke(Request $request,
                             EntityManagerInterface $entityManager,
                             TrainingIndexPlanningJavascriptPresenterInterface $trainingIndexPlanningJavascriptPresenter,
                             Security $security,
                             UrlGeneratorInterface $urlGenerator,
                             SportsProgramCardio1 $sportsProgramCardio1,
                             SportsProgramCardio1Intermediate $sportsProgramCardio1Intermediate,
                             SportsProgramCardio2 $sportsProgramCardio2,
                             SporstProgramCardio2Intermediate $sportsProgramCardio2Intermediate): Response
    {

        $human = $entityManager->getRepository(Human::class)->findOneBy(["user" => $security->getUser()->getId()]);


        return $trainingIndexPlanningJavascriptPresenter->present(new TrainingIndexPlanningJavascriptResponder($human),
            $sportsProgramCardio1,
            $sportsProgramCardio1Intermediate,
            $sportsProgramCardio2,
            $sportsProgramCardio2Intermediate
        );
    }

}