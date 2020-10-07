<?php


namespace App\Application\Entity\Sport\Exercices\Cardio;


use App\Application\Entity\Sport\AbstractExercice;

class BearWalk extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Marche de l'ours";
        $this->partOfTheBodyUsed = [
            "principale" => "Gainage",
            "secondaire" => "Coeur"
        ];
        $this->level = 2;
        $this->neededMateriel = false;
        $this->instructions = "A définir";
    }

}