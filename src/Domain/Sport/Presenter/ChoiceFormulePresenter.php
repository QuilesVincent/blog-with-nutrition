<?php


namespace App\Domain\Sport\Presenter;



use App\Domain\Sport\Responder\ChoiceFormuleResponder;
use App\Infrastructure\Presenter\AbstractPresenter;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class ChoiceFormulePresenter extends AbstractPresenter implements ChoiceFormulePresenterInterface
{

    /**
     * @param ChoiceFormuleResponder $choiceFormuleResponder
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function present(ChoiceFormuleResponder $choiceFormuleResponder): Response
    {
        return new Response($this->twig->render("sport/inscription/choice-formule.html.twig", [
            "products" => $choiceFormuleResponder->getProducts(),
            "title" => "Page des programme"
        ]));
    }

    /**
     * @param UrlGeneratorInterface $urlGenerator
     * @return RedirectResponse
     */
    public function redirect(UrlGeneratorInterface $urlGenerator): RedirectResponse
    {
        return new RedirectResponse($urlGenerator->generate("programme_sport_inscription"));
    }

    /**
     * @param UrlGeneratorInterface $urlGenerator
     * @return RedirectResponse
     */
    public function redirectFormuleChoice(UrlGeneratorInterface $urlGenerator): RedirectResponse
    {
        return new RedirectResponse($urlGenerator->generate("programme_sport_choice_formule"));
    }


}