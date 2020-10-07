<?php


namespace App\Domain\Sport\Controller;


use App\Application\Entity\Human;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio1;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio2;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio1 as SportsProgramCardio1Intermediate;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio2 as SporstProgramCardio2Intermediate;
use App\Domain\Sport\Presenter\MenuIndexPlanningJavascriptPresenterInterface;
use App\Domain\Sport\Presenter\TrainingIndexPlanningJavascriptPresenterInterface;
use App\Domain\Sport\Presenter\TrainingIndexPresenterInterface;
use App\Domain\Sport\Responder\MenuIndexPlanningJavascriptResponder;
use App\Domain\Sport\Responder\TrainingIndexPlanningJavascriptResponder;
use App\Domain\Sport\Responder\TrainingIndexResponder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;

class FoodIndexPlanningJavascript
{

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param MenuIndexPlanningJavascriptPresenterInterface $menuIndexPlanningJavascriptPresenter
     * @param Security $security
     * @param UrlGeneratorInterface $urlGenerator
     * @return Response
     */
    public function __invoke(Request $request,
                             EntityManagerInterface $entityManager,
                             MenuIndexPlanningJavascriptPresenterInterface $menuIndexPlanningJavascriptPresenter,
                             Security $security,
                             UrlGeneratorInterface $urlGenerator): Response
    {

        $human = $entityManager->getRepository(Human::class)->findOneBy(["user" => $security->getUser()->getId()]);


        return $menuIndexPlanningJavascriptPresenter->present(new MenuIndexPlanningJavascriptResponder($human));
    }

}