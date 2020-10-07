<?php


namespace App\Application\Entity\Sport\Exercices\UpperBody;


use App\Application\Entity\Sport\AbstractExercice;

class PushupsRaisedFoots extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Pompes pieds surélevés";
        $this->partOfTheBodyUsed = [
            "principale" => "Pectoraux",
            "secondaire" => ["épaules", "triceps"]
        ];
        $this->level = 4;
        $this->neededMateriel = false;
        $this->instructions = "A définir";
    }

}