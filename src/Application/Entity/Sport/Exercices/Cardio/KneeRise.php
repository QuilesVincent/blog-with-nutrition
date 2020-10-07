<?php


namespace App\Application\Entity\Sport\Exercices\Cardio;


use App\Application\Entity\Sport\AbstractExercice;

class KneeRise extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Montée de genoux";
        $this->partOfTheBodyUsed = [
            "principale" => "Coeur",
            "secondaire" => "Jambes"
        ];
        $this->level = 2;
        $this->neededMateriel = false;
        $this->instructions = "A définir";
    }

}