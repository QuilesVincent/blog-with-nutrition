<?php


namespace App\Domain\Api\Controller;


use App\Application\Entity\Article;
use App\Domain\Api\Handler\ArticleHandler;
use App\Domain\Api\Presenter\FormArticlePresenterInterface;
use App\Domain\Api\Responder\CreateArticlesResponder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class CreateArticleForm extends AbstractApiController
{

    /**
     * @param Request $request
     * @param ArticleHandler $articleHandler
     * @param UrlGeneratorInterface $urlGenerator
     * @param FormArticlePresenterInterface $formArticlePresenter
     * @return Response
     */
    public function __invoke(Request $request,
                             ArticleHandler $articleHandler,
                             UrlGeneratorInterface $urlGenerator,
                             FormArticlePresenterInterface $formArticlePresenter): Response
    {
        $article = new Article();

        $options = [
            "validation_groups" => ["Default" => "create"]
        ];

        if($articleHandler->handle($request, $article, $options)) {
            return $formArticlePresenter->redirect($urlGenerator);
        }

        return $formArticlePresenter->present(new CreateArticlesResponder($articleHandler->createView()));
    }

}