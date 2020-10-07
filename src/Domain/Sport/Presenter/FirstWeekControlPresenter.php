<?php


namespace App\Domain\Sport\Presenter;


use App\Domain\Sport\Responder\FirstWeekControlResponder;
use App\Infrastructure\Presenter\AbstractPresenter;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class FirstWeekControlPresenter extends AbstractPresenter implements FirstWeekControlPresenterInterface
{

    public function present(FirstWeekControlResponder $firstWeekControlResponder): Response
    {
        return new Response($this->twig->render("sport/control/firstWeekControl.html.twig", [
            "form" => $firstWeekControlResponder->getFormView(),
            "title" => "Résultats première semaine"
        ]));

    }

    public function redirect(UrlGeneratorInterface $urlGenerator): RedirectResponse
    {
        return new RedirectResponse($urlGenerator->generate("programme_page_programs"));
    }


}