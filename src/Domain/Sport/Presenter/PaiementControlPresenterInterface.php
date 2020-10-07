<?php


namespace App\Domain\Sport\Presenter;

use App\Domain\Sport\Responder\PaiementControlResponder;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

interface PaiementControlPresenterInterface
{
    public function present(PaiementControlResponder $paiementControlResponder): Response;

    /**
     * @param UrlGeneratorInterface $urlGenerator
     * @return RedirectResponse
     */
    public function redirect(UrlGeneratorInterface $urlGenerator): RedirectResponse;
}