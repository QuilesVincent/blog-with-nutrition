<?php


namespace App\Domain\Sport\Presenter;


use App\Domain\Sport\Responder\AccueilResponder;
use App\Domain\Sport\Responder\ConnexionProgrammeResponder;
use App\Domain\Sport\Responder\InscriptionUserInfoResponder;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

interface InscriptionUserInfoPresenterInterface
{
    public function present(InscriptionUserInfoResponder $inscriptionUserInfoResponder): Response;

    public function redirect(UrlGeneratorInterface  $urlGenerator): RedirectResponse;

}