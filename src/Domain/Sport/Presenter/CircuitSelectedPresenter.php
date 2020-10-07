<?php


namespace App\Domain\Sport\Presenter;


use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio1;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio2;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio1 as SportsProgramCardio1Intermediate;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio2 as SporstProgramCardio2Intermediate;
use App\Domain\Sport\Responder\CircuitSelectedResponder;
use App\Domain\Sport\Responder\TrainingIndexResponder;
use App\Infrastructure\Presenter\AbstractPresenter;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class CircuitSelectedPresenter extends AbstractPresenter implements CircuitSelectedPresenterInterface
{

    /**
     * @param CircuitSelectedResponder $circuitSelectedResponder
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function present(CircuitSelectedResponder $circuitSelectedResponder): Response
    {
        return new Response($this->twig->render("sport/programme/circuitSelected.html.twig", [
            "circuit" => $circuitSelectedResponder->getCircuit(),
            "slug" => $circuitSelectedResponder->getSlug(),
            "title" => $circuitSelectedResponder->getCircuit()->getName(),
            "human" => $circuitSelectedResponder->getHuman(),
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