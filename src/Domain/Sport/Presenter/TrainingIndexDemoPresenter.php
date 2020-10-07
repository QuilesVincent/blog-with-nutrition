<?php


namespace App\Domain\Sport\Presenter;


use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio1Demo;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio2Demo;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio1Demo as SportsProgramCardio1Intermediate;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio2Demo as SporstProgramCardio2Intermediate;
use App\Domain\Sport\Responder\TrainingIndexDemoResponder;
use App\Infrastructure\Presenter\AbstractPresenter;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class TrainingIndexDemoPresenter extends AbstractPresenter implements TrainingIndexDemoPresenterInterface
{

    /**
     * @param TrainingIndexDemoResponder $trainingIndexDemoResponder
     * @param SportsProgramCardio1Demo $sportsProgramCardio1Demo
     * @param SportsProgramCardio1Intermediate $sportsProgramCardio1IntermediateDemo
     * @param SportsProgramCardio2Demo $sportsProgramCardio2Demo
     * @param SporstProgramCardio2Intermediate $sportsProgramCardio2IntermediateDemo
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function present(TrainingIndexDemoResponder $trainingIndexDemoResponder,
                            SportsProgramCardio1Demo $sportsProgramCardio1Demo,
                            SportsProgramCardio1Intermediate $sportsProgramCardio1IntermediateDemo,
                            SportsProgramCardio2Demo $sportsProgramCardio2Demo,
                            SporstProgramCardio2Intermediate $sportsProgramCardio2IntermediateDemo): Response
    {
        return new Response($this->twig->render("sport/demo/training-index-demo.html.twig", [
            "programs" => $trainingIndexDemoResponder->getPrograms($sportsProgramCardio1Demo,
                $sportsProgramCardio2Demo,
                $sportsProgramCardio1IntermediateDemo,
                $sportsProgramCardio2IntermediateDemo
            ),
            "human" => $trainingIndexDemoResponder->getHuman(),
            "title" => "Page des programme"
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