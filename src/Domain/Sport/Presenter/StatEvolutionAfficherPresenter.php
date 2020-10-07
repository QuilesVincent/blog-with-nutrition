<?php


namespace App\Domain\Sport\Presenter;


use App\Domain\Sport\Responder\StatEvolutionAfficherResponder;
use App\Infrastructure\Presenter\AbstractPresenter;
use Symfony\Component\HttpFoundation\Response;

class StatEvolutionAfficherPresenter extends AbstractPresenter implements StatEvolutionAfficherPresenterInterface
{

    public function present(StatEvolutionAfficherResponder $statEvolutionAfficherResponder): Response
    {
        return new Response($this->twig->render("sport/programme/stat-evolution.html.twig", [
            "human" => $statEvolutionAfficherResponder->getHuman()
        ]));
    }
}