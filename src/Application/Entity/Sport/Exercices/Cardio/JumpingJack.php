<?php


namespace App\Application\Entity\Sport\Exercices\Cardio;


use App\Application\Entity\Sport\AbstractExercice;

class JumpingJack extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Jumping Jack";
        $this->partOfTheBodyUsed = [
            "principale" => "Coeur",
            "secondaire" => "Jambes"
        ];
        $this->level = 2;
        $this->neededMateriel = false;
        $this->instructions = "A définir";
    }

}