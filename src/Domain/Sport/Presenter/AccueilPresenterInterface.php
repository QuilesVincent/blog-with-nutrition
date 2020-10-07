<?php


namespace App\Domain\Sport\Presenter;


use App\Domain\Sport\Responder\AccueilResponder;
use App\Domain\Sport\Responder\ConnexionProgrammeResponder;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

interface AccueilPresenterInterface
{
    public function present(AccueilResponder $accueilResponder): Response;

    public function redirect(UrlGeneratorInterface  $urlGenerator): RedirectResponse;

}