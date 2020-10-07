<?php


namespace App\Domain\Sport\Presenter;


use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio1;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio2;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio1 as SportsProgramCardio1Intermediate;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio2 as SporstProgramCardio2Intermediate;
use App\Domain\Sport\Responder\TrainingIndexPlanningJavascriptResponder;
use App\Domain\Sport\Responder\TrainingIndexResponder;
use App\Infrastructure\Presenter\AbstractPresenter;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class TrainingIndexPlanningJavascriptPresenter extends AbstractPresenter implements TrainingIndexPlanningJavascriptPresenterInterface
{

    /**
     * @param TrainingIndexPlanningJavascriptResponder $trainingIndexPlanningJavascriptResponder
     * @param SportsProgramCardio1 $sportsProgramCardio1
     * @param SportsProgramCardio1Intermediate $sportsProgramCardio1Intermediate
     * @param SportsProgramCardio2 $sportsProgramCardio2
     * @param SporstProgramCardio2Intermediate $sportsProgramCardio2Intermediate
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function present(TrainingIndexPlanningJavascriptResponder $trainingIndexPlanningJavascriptResponder,
                            SportsProgramCardio1 $sportsProgramCardio1,
                            SportsProgramCardio1Intermediate $sportsProgramCardio1Intermediate,
                            SportsProgramCardio2 $sportsProgramCardio2,
                            SporstProgramCardio2Intermediate $sportsProgramCardio2Intermediate): Response
    {
        return new Response($this->twig->render("sport/programme/training-index-planning-javascript.html.twig", [
            "programs" => $trainingIndexPlanningJavascriptResponder->getPrograms($sportsProgramCardio1,
                $sportsProgramCardio2,
                $sportsProgramCardio1Intermediate,
                $sportsProgramCardio2Intermediate
            ),
            "title" => "Page des programme pour planning"
        ]));
    }

    /**
     * @param UrlGeneratorInterface $urlGenerator
     * @return RedirectResponse
     */
    public function redirect(UrlGeneratorInterface $urlGenerator): RedirectResponse
    {
        return new RedirectResponse($urlGenerator->generate("programme_sport_control_first_week"));
    }


}