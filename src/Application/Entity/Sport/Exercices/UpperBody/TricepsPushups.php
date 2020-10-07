<?php


namespace App\Application\Entity\Sport\Exercices\UpperBody;


use App\Application\Entity\Sport\AbstractExercice;

class TricepsPushups extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Pompes triceps";
        $this->partOfTheBodyUsed = [
            "principale" => "Triceps",
            "secondaire" => ["Pectoraux", "Epaules"]
        ];
        $this->level = 3;
        $this->neededMateriel = false;
        $this->instructions = "A définir";

        $this->easierOptions = "Faire sur les genoux";
    }

}