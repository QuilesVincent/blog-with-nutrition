<?php


namespace App\Domain\Sport\Presenter;


use App\Domain\Sport\Responder\StatEvolutionAfficherResponder;
use Symfony\Component\HttpFoundation\Response;

interface StatEvolutionAfficherPresenterInterface
{

    /**
     * @param StatEvolutionAfficherResponder $statEvolutionAfficherResponder
     * @return Response
     */
    public function present(StatEvolutionAfficherResponder $statEvolutionAfficherResponder): Response;

}