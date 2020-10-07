<?php


namespace App\Application\Entity\Sport\Exercices\UpperBody;


use App\Application\Entity\Sport\AbstractExercice;

class Pushups extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Pompes";
        $this->partOfTheBodyUsed = [
            "principale" => "Pectoraux",
            "secondaire" => ["épaules", "triceps"]
        ];
        $this->level = 3;
        $this->neededMateriel = false;
        $this->instructions = "A définir";

        $this->easierOptions = "Faire sur les genoux";
    }

}