<?php


namespace App\Domain\Sport\Presenter;


use App\Domain\Sport\Responder\MenuIndexDemoResponder;
use App\Infrastructure\Presenter\AbstractPresenter;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class MenuIndexDemoPresenter extends AbstractPresenter implements MenuIndexDemoPresenterInterface
{

    /**
     * @param MenuIndexDemoResponder $menuIndexDemoResponder
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function present(MenuIndexDemoResponder $menuIndexDemoResponder): Response
    {
        return new Response($this->twig->render("sport/demo/menuIndexDemo.html.twig", [
            "recettesBreakfast" => $menuIndexDemoResponder->getAllRecettesBreakfast(),
            "recettesLowCarb" => $menuIndexDemoResponder->getAllRecettesLowCarb(),
            "recettesHightCarb" => $menuIndexDemoResponder->getAllRecetteHightCarb(),
            "recettesSnack" => $menuIndexDemoResponder->getAllRecetteSnack(),
            "human" => $menuIndexDemoResponder->getHuman(),
            "title" => "Page des recettes"
        ]));
    }

    /**
     * @param UrlGeneratorInterface $urlGenerator
     * @return RedirectResponse
     */
    public function redirect(UrlGeneratorInterface $urlGenerator): RedirectResponse
    {
        return new RedirectResponse($urlGenerator->generate("programme_sport_control_first_week"));
    }


}