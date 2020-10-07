<?php


namespace App\Application\Entity\Sport\Exercices\Abs;


use App\Application\Entity\Sport\AbstractExercice;

class TPlank extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Planche en T dynamique";
        $this->partOfTheBodyUsed = [
            "principale" => "Abdos",
            "secondaire" => ["Epaules", "Erecteurs spinaux"]
        ];
        $this->level = 3;
        $this->neededMateriel = false;

        $this->instructions = "A définir";
    }

}