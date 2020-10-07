<?php


namespace App\Application\Entity\Sport\Exercices\LowerBody;


use App\Application\Entity\Sport\AbstractExercice;

class Slots extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Fentes";
        $this->partOfTheBodyUsed = [
            "principale" => "Quadriceps",
            "secondaire" => ["Fessiers", "Ischios-jambiers"]
        ];
        $this->level = 3;
        $this->neededMateriel = false;
        $this->instructions = "A définir";
    }

}