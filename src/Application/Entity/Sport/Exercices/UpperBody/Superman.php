<?php


namespace App\Application\Entity\Sport\Exercices\UpperBody;


use App\Application\Entity\Sport\AbstractExercice;

class Superman extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Superman";
        $this->partOfTheBodyUsed = [
            "principale" => "Erecteurs spinaux",
            "secondaire" => "Epaules"
        ];
        $this->level = 1;
        $this->neededMateriel = false;
        $this->instructions = "A définir";
    }

}