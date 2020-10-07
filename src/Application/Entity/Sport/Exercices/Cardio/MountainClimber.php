<?php


namespace App\Application\Entity\Sport\Exercices\Cardio;


use App\Application\Entity\Sport\AbstractExercice;

class MountainClimber extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Marche du grimpeur";
        $this->partOfTheBodyUsed = [
            "principale" => ["Coeur", "Gainage"],
            "secondaire" => ["Epaules", "Triceps", "Jambes"]
        ];
        $this->level = 3;
        $this->neededMateriel = false;
        $this->instructions = "A définir";
    }

}