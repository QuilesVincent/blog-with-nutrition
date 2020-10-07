<?php


namespace App\Domain\Sport\Presenter;



use App\Domain\Sport\Responder\ChoiceFormuleResponder;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

interface ChoiceFormulePresenterInterface
{
    public function present(ChoiceFormuleResponder $choiceFormuleResponder): Response;

    /**
     * @param UrlGeneratorInterface $urlGenerator
     * @return RedirectResponse
     */
    public function redirect(UrlGeneratorInterface $urlGenerator): RedirectResponse;

    /**
     * @param UrlGeneratorInterface $urlGenerator
     * @return RedirectResponse
     */
    public function redirectFormuleChoice(UrlGeneratorInterface $urlGenerator): RedirectResponse;

}