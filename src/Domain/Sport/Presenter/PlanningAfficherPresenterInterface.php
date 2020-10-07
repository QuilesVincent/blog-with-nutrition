<?php


namespace App\Domain\Sport\Presenter;



use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio1;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio2;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio1 as SportsProgramCardio1Intermediate;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio2 as SporstProgramCardio2Intermediate;
use App\Domain\Sport\Responder\CircuitSelectedResponder;
use App\Domain\Sport\Responder\MenuSelectedResponder;
use App\Domain\Sport\Responder\PlanningAfficherResponder;
use App\Domain\Sport\Responder\TrainingIndexResponder;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

interface PlanningAfficherPresenterInterface
{
    public function present(PlanningAfficherResponder $planningAfficherResponder): Response;

    /**
     * @param UrlGeneratorInterface $urlGenerator
     * @return RedirectResponse
     */
    public function redirect(UrlGeneratorInterface $urlGenerator): RedirectResponse;

}