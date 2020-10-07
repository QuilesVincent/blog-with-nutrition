<?php


namespace App\Domain\Sport\Presenter;


use App\Domain\Sport\Responder\BeginningSportResponder;
use App\Domain\Sport\Responder\ConnexionProgrammeResponder;
use App\Infrastructure\Presenter\AbstractPresenter;
use Symfony\Component\HttpFoundation\Response;

class BeginningSportPresenter extends AbstractPresenter implements BeginningSportPresenterInterface
{

    /**
     * @param BeginningSportResponder $beginningSportResponder
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function present(BeginningSportResponder $beginningSportResponder): Response
    {
        return new Response($this->twig->render("sport/programme/beginningSport.html.twig", [
            "human" => $beginningSportResponder->getHuman(),
            "title" => "connexion au programme"
        ]));
    }


}