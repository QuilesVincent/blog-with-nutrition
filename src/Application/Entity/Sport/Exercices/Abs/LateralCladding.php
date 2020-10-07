<?php


namespace App\Application\Entity\Sport\Exercices\Abs;


use App\Application\Entity\Sport\AbstractExercice;

class LateralCladding extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Gainage latéral";
        $this->partOfTheBodyUsed = [
            "principale" => "Abdos",
            "secondaire" => ["Epaules", "Erecteurs spinaux"]
        ];
        $this->level = 4;
        $this->neededMateriel = false;

        $this->instructions = "A définir";
    }

}