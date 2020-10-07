<?php


namespace App\Domain\Sport\Responder;



class MenuSelectedResponder
{

    private object $recette;

    private object $human;

    public function __construct(object $recette, object $human){

        $this->recette = $recette;
        $this->human = $human;
    }

    /**
     * @return object
     */
    public function getRecette(): object
    {
        return $this->recette;
    }

    /**
     * @return object
     */
    public function getHuman(): object
    {
        return $this->human;
    }

    /**
     * @param object $human
     */
    public function setHuman(object $human): void
    {
        $this->human = $human;
    }





}