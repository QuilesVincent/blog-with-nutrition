<?php


namespace App\Domain\Sport\Responder;


class StatEvolutionAfficherResponder
{

    /**
     * @var object
     */
    private object $human;

    /**
     * StatEvolutionAfficherResponder constructor.
     * @param object $human
     */
    public function __construct(object $human)
    {
        $this->human = $human;
    }

    /**
     * @return object
     */
    public function getHuman(): object
    {
        return $this->human;
    }



}