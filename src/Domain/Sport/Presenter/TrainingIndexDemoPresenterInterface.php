<?php


namespace App\Domain\Sport\Presenter;



use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio1Demo;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio2Demo;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio1Demo as SportsProgramCardio1Intermediate;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio2Demo as SporstProgramCardio2Intermediate;
use App\Domain\Sport\Responder\TrainingIndexDemoResponder;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

interface TrainingIndexDemoPresenterInterface
{
    public function present(TrainingIndexDemoResponder $trainingIndexDemoResponder,
                            SportsProgramCardio1Demo $sportsProgramCardio1,
                            SportsProgramCardio1Intermediate $sportsProgramCardio1Intermediate,
                            SportsProgramCardio2Demo $sportsProgramCardio2,
                            SporstProgramCardio2Intermediate $sportsProgramCardio2Intermediate): Response;

    /**
     * @param UrlGeneratorInterface $urlGenerator
     * @return RedirectResponse
     */
    public function redirect(UrlGeneratorInterface $urlGenerator): RedirectResponse;

}