<?php


namespace App\Application\Entity\Sport\Exercices\LowerBody;


use App\Application\Entity\Sport\AbstractExercice;

class HipThrust extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Relevé de bassin";
        $this->partOfTheBodyUsed = [
            "principale" => "Fessiers"
        ];
        $this->level = 1;
        $this->neededMateriel = false;
        $this->instructions = "A définir";
    }

}