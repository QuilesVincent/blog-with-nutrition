<?php


namespace App\Application\Entity\Sport\Exercices\Abs;


use App\Application\Entity\Sport\AbstractExercice;

class PlankTwist extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Gainage planche avec twist";
        $this->partOfTheBodyUsed = [
            "principale" => "Abdos",
            "secondaire" => ["Epaules", "Erecteurs spinaux", "Psoas"]
        ];
        $this->level = 3;
        $this->neededMateriel = false;

        $this->instructions = "A définir";
    }

}