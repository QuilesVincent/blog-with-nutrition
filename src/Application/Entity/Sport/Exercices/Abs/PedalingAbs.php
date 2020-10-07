<?php


namespace App\Application\Entity\Sport\Exercices\Abs;


use App\Application\Entity\Sport\AbstractExercice;

class PedalingAbs extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Abdos Pédalages";
        $this->partOfTheBodyUsed = ["principale" => "Abdos"];
        $this->level = 3;
        $this->neededMateriel = false;

        $this->instructions = "A définir";
    }

}