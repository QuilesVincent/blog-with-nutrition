<?php


namespace App\Domain\Sport\Presenter;


use App\Domain\Sport\Responder\FirstWeekControlResponder;
use App\Domain\Sport\Responder\InscriptionProgrammeResponder;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

interface FirstWeekControlPresenterInterface
{

    public function present(FirstWeekControlResponder $firstWeekControlResponder): Response;

    public function redirect(UrlGeneratorInterface $urlGenerator): RedirectResponse;

}