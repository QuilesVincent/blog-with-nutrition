<?php


namespace App\Domain\Api\Presenter;


use App\Domain\Api\Responder\CreateArticlesResponder;
use App\Infrastructure\Presenter\AbstractPresenter;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class FormArticlePresenter extends AbstractPresenter implements FormArticlePresenterInterface
{

    public function present(CreateArticlesResponder $createArticlesResponder): Response
    {
        return new Response($this->twig->render("api/creationArticle.html.twig", [
            "form" => $createArticlesResponder->getFormView(),
            "title" => "Création d'articles",
        ]));
    }

    public function redirect(UrlGeneratorInterface $urlGenerator): RedirectResponse
    {
        return new RedirectResponse($urlGenerator->generate("api-listing-articles"));
    }
}