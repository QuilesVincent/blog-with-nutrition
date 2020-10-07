<?php

namespace App\Domain\Sport\Presenter;

use App\Domain\Sport\Responder\PaiementControlResponder;
use App\Infrastructure\Presenter\AbstractPresenter;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PaiementControlPresenter extends AbstractPresenter implements PaiementControlPresenterInterface
{
    /**
     * @param PaiementControlResponder $paiementControlResponder
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function present(PaiementControlResponder $paiementControlResponder): Response
    {
        return new Response($this->twig->render('sport/inscription/paiement-control.html.twig', [
            'stripe_public_key' => 'pk_test_51GsTPmKLPfQ86kQCkcPb4fiGyFCecJFjFTFAh7RG1hkuvBadMgR3mRUatH6nCgmj2ojoWi594Iuv3dEmOrAIUebc00rabCoI8r',
            'product' => $paiementControlResponder->getProduct(),
            'intent' => $paiementControlResponder->getIntent(),
            'title' => 'Choix du produit',
        ]));
    }

    public function redirect(UrlGeneratorInterface $urlGenerator): RedirectResponse
    {
        return new RedirectResponse($urlGenerator->generate('programme_sport_inscription'));
    }

    public function redirectFormuleChoice(UrlGeneratorInterface $urlGenerator): RedirectResponse
    {
        return new RedirectResponse($urlGenerator->generate('programme_sport_choice_formule'));
    }
}
