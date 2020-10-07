<?php


namespace App\Application\Entity\Sport\Exercices\Cardio;


use App\Application\Entity\Sport\AbstractExercice;

class JumpSquat extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Jump Squat";
        $this->partOfTheBodyUsed = [
            "principale" => ["Coeur", "Jambes"],
            "secondaire" => "Gainage"
        ];
        $this->level = 3;
        $this->neededMateriel = false;
        $this->instructions = "A définir";
    }

}