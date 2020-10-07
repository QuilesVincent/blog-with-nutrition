<?php


namespace App\Domain\Sport\Presenter;


use App\Domain\Sport\Responder\AccueilResponder;
use App\Infrastructure\Presenter\AbstractPresenter;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AccueilPresenter extends AbstractPresenter implements AccueilPresenterInterface
{

    /**
     * @param AccueilResponder $accueilResponder
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function present(AccueilResponder $accueilResponder): Response
    {
        return new Response($this->twig->render("/sport/accueil.html.twig", [
            "form" => $accueilResponder->getFormView(),
            "title" => "connexion au programme"
        ]));
    }

    public function redirect(UrlGeneratorInterface $urlGenerator): RedirectResponse
    {
        return new RedirectResponse($urlGenerator->generate("programme_sport_inscription"));
    }


}