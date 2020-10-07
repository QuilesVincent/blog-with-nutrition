<?php


namespace App\Domain\Sport\Presenter;



use App\Domain\Sport\Responder\PlanningAfficherResponder;
use App\Infrastructure\Presenter\AbstractPresenter;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PlanningAfficherPresenter extends AbstractPresenter implements PlanningAfficherPresenterInterface
{

    /**
     * @param PlanningAfficherResponder $planningAfficherResponder
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function present(PlanningAfficherResponder $planningAfficherResponder): Response
    {
        return new Response($this->twig->render("sport/programme/monPlanning.html.twig", [
            "recettes" => $planningAfficherResponder->getAllRecettes(),
            "programs" => $planningAfficherResponder->getAllPrograms(),
            "human" => $planningAfficherResponder->getHuman(),
            "title" => "Mon planning"
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