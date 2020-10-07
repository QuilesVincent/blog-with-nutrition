<?php


namespace App\Application\Entity\Sport\Exercices\UpperBody;


use App\Application\Entity\Sport\AbstractExercice;

class TricepsDips extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Dips main sur chaise derrière le corps";
        $this->partOfTheBodyUsed = [
            "principale" => "Triceps",
            "secondaire" => "Epaules"
        ];
        $this->level = 3;
        $this->neededMateriel = true;
        $this->materielUsed = ["chaise"];
        $this->instructions = "A définir";

        $this->morediffcultOptions = "Surèlever les pieds et garder les jambes tendues";
    }

}