<?php


namespace App\Domain\Sport\Presenter;


use App\Domain\Sport\Responder\AccueilResponder;
use App\Domain\Sport\Responder\InscriptionUserInfoResponder;
use App\Infrastructure\Presenter\AbstractPresenter;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class InscriptionUserInfoPresenter extends AbstractPresenter implements InscriptionUserInfoPresenterInterface
{

    /**
     * @param InscriptionUserInfoResponder $inscriptionUserInfoResponder
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function present(InscriptionUserInfoResponder $inscriptionUserInfoResponder): Response
    {
        return new Response($this->twig->render("/sport/inscription/inscriptionUserInfo.html.twig", [
            "form" => $inscriptionUserInfoResponder->getFormView(),
            "title" => "connexion au programme"
        ]));
    }

    public function redirect(UrlGeneratorInterface $urlGenerator): RedirectResponse
    {
        return new RedirectResponse($urlGenerator->generate("programme_sport_accueil"));
    }


}