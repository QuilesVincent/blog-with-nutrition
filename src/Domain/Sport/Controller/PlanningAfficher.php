<?php

namespace App\Domain\Sport\Controller;

use App\Application\Entity\Human;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio1;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio2;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio1 as SportsProgramCardio1Intermediate;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio2 as SportsProgramCardio2Intermediate;
use App\Domain\Sport\Presenter\PlanningAfficherPresenterInterface;
use App\Domain\Sport\Responder\PlanningAfficherResponder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;

class PlanningAfficher
{
    public function __invoke(Request $request,
                             EntityManagerInterface $entityManager,
                             PlanningAfficherPresenterInterface $planningAfficherPresenter,
                             Security $security,
                             UrlGeneratorInterface $urlGenerator,
                             SportsProgramCardio1 $sportsProgramCardio1,
                             SportsProgramCardio2 $sportsProgramCardio2,
                             SportsProgramCardio1Intermediate $sportsProgramCardio1Intermediate,
                             SportsProgramCardio2Intermediate $sportsProgramCardio2Intermediate): Response
    {
        $human = $entityManager->getRepository(Human::class)->findOneBy(['user' => $security->getUser()->getId()]);

        return $planningAfficherPresenter->present(new PlanningAfficherResponder(
            $human,
            $sportsProgramCardio1,
            $sportsProgramCardio2,
            $sportsProgramCardio1Intermediate,
            $sportsProgramCardio2Intermediate
        ));
    }
}
