<?php


namespace App\Application\Entity\Sport\Exercices\Cardio;


use App\Application\Entity\Sport\AbstractExercice;

class BrokenSlots extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Fentes sautées";
        $this->partOfTheBodyUsed = [
            "principale" => ["Coeur", "Jambes"],
            "secondaire" => "Gainage"
        ];
        $this->level = 4;
        $this->neededMateriel = false;
        $this->instructions = "A définir";
    }

}