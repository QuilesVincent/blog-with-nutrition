<?php


namespace App\Domain\Sport\Presenter;


use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio1;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio2;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio1 as SportsProgramCardio1Intermediate;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio2 as SporstProgramCardio2Intermediate;
use App\Domain\Sport\Responder\CircuitSelectedResponder;
use App\Domain\Sport\Responder\MenuSelectedResponder;
use App\Domain\Sport\Responder\TrainingIndexResponder;
use App\Infrastructure\Presenter\AbstractPresenter;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class MenuSelectedPresenter extends AbstractPresenter implements MenuSelectedPresenterInterface
{

    /**
     * @param MenuSelectedResponder $menuSelectedResponder
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function present(MenuSelectedResponder $menuSelectedResponder): Response
    {
        return new Response($this->twig->render("sport/programme/menuSelected.html.twig", [
            "recette" => $menuSelectedResponder->getRecette(),
            "explication" => $menuSelectedResponder->getRecette()->getExplication(),
            "human" => $menuSelectedResponder->getHuman(),
            "title" => $menuSelectedResponder->getRecette()->getName()
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