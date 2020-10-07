<?php


namespace App\Domain\Sport\Presenter;


use App\Domain\Sport\Responder\InscriptionProgrammeResponder;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Interface InscriptionProgrammePresenterInterface
 * @package App\Domain\Sport\Presenter
 */
interface InscriptionProgrammePresenterInterface
{
    /**
     * @param InscriptionProgrammeResponder $inscriptionProgrammeResponder
     * @return Response
     */
    public function present(InscriptionProgrammeResponder $inscriptionProgrammeResponder): Response;

    /**
     * @param UrlGeneratorInterface $urlGenerator
     * @return RedirectResponse
     */
    public function redirect(UrlGeneratorInterface $urlGenerator): RedirectResponse;


    /**
     * @param UrlGeneratorInterface $urlGenerator
     * @return RedirectResponse
     */
    public function redirectIsExist(UrlGeneratorInterface $urlGenerator): RedirectResponse;

}