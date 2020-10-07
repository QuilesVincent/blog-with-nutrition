<?php


namespace App\Domain\Api\Presenter;


use App\Domain\Api\Responder\CreateArticlesResponder;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

interface FormArticlePresenterInterface
{

    /**
     * @param CreateArticlesResponder $createArticlesResponder
     * @return Response
     */
    public function present(CreateArticlesResponder $createArticlesResponder): Response;

    /**
     * @param UrlGeneratorInterface $urlGenerator
     * @return RedirectResponse
     */
    public function redirect(UrlGeneratorInterface $urlGenerator): RedirectResponse;

}