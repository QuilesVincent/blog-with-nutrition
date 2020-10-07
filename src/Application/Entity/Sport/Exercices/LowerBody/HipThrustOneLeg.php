<?php


namespace App\Application\Entity\Sport\Exercices\LowerBody;


use App\Application\Entity\Sport\AbstractExercice;

class HipThrustOneLeg extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Relevé de bassin sur 1 jambe";
        $this->partOfTheBodyUsed = [
            "principale" => "Fessiers"
        ];
        $this->level = 2;
        $this->neededMateriel = false;
        $this->instructions = "A définir";
    }

}