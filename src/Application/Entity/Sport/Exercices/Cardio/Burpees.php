<?php


namespace App\Application\Entity\Sport\Exercices\Cardio;


use App\Application\Entity\Sport\AbstractExercice;

class Burpees extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Fentes sautées";
        $this->partOfTheBodyUsed = [
            "principale" => ["Coeur", "Jambes"],
            "secondaire" => "Gainage"
        ];
        $this->level = 5;
        $this->neededMateriel = false;
        $this->instructions = "A définir";
    }

}