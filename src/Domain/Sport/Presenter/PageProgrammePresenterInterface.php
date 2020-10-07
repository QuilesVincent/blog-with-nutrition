<?php


namespace App\Domain\Sport\Presenter;



use App\Domain\Sport\Responder\PageProgrammeResponder;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

interface PageProgrammePresenterInterface
{
    public function present(PageProgrammeResponder $pageProgrammeResponder): Response;

    /**
     * @param UrlGeneratorInterface $urlGenerator
     * @return RedirectResponse
     */
    public function redirect(UrlGeneratorInterface $urlGenerator): RedirectResponse;

}