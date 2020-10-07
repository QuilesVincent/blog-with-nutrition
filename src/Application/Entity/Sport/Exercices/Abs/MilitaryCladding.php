<?php


namespace App\Application\Entity\Sport\Exercices\Abs;


use App\Application\Entity\Sport\AbstractExercice;

class MilitaryCladding extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Gainage militaires";
        $this->partOfTheBodyUsed = [
            "principale" => "Abdos",
            "secondaire" => ["Epaules", "Erecteurs spinaux", "Psoas"]
        ];
        $this->level = 4;
        $this->neededMateriel = false;

        $this->instructions = "A définir";
    }

}