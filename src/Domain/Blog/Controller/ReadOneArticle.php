<?php


namespace App\Domain\Blog\Controller;


use App\Application\Entity\Article;
use App\Application\Entity\Comment;
use App\Domain\Blog\Handler\CommentHandler;
use App\Domain\Blog\Presenter\ReadArticlePresenterInterface;
use App\Domain\Blog\Responder\ReadArticlesResponder;
use App\Domain\Blog\Responder\RedirectReadArticlesResponder;
use App\Infrastructure\Controller\AuthorizationTrait;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class ReadOneArticle
{

    use AuthorizationTrait;

    /**
     * @param Article $article
     * @param Request $request
     * @param CommentHandler $commentHandler
     * @param ReadArticlePresenterInterface $readArticlePresenter
     * @param UrlGeneratorInterface $urlGenerator
     * @return Response
     */
    public function __invoke(Article $article,
                             Request $request,
                             CommentHandler $commentHandler,
                             ReadArticlePresenterInterface $readArticlePresenter,
                             UrlGeneratorInterface $urlGenerator): Response
    {
        $comment = new Comment();
        $comment->setArticle($article);

        $options = [
            "validation_groups" => $this->isGranted("ROLE_USER")
            || $this->isGranted("ROLE_ADMIN") ? "Default" : ["Default", "anonymous"]
        ];

        if ($commentHandler->handle($request, $comment, $options)) {
            return $readArticlePresenter->redirect(new RedirectReadArticlesResponder($article), $urlGenerator);
        }

        return $readArticlePresenter->present(new ReadArticlesResponder($article, $commentHandler->createView()));

    }

}