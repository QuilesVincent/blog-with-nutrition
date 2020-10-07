<?php


namespace App\Domain\Sport\Presenter;




use App\Domain\Sport\Responder\MenuIndexDemoResponder;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

interface MenuIndexDemoPresenterInterface
{
    public function present(MenuIndexDemoResponder $menuIndexDemoResponder): Response;

    /**
     * @param UrlGeneratorInterface $urlGenerator
     * @return RedirectResponse
     */
    public function redirect(UrlGeneratorInterface $urlGenerator): RedirectResponse;

}