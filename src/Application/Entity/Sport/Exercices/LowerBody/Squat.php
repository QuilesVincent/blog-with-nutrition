<?php


namespace App\Application\Entity\Sport\Exercices\LowerBody;


use App\Application\Entity\Sport\AbstractExercice;

class Squat extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Squat";
        $this->partOfTheBodyUsed = [
            "principale" => "Quadriceps",
            "secondaire" => ["Fessiers", "Ischios-jambiers"]
        ];
        $this->level = 2;
        $this->neededMateriel = false;
        $this->instructions = "Gardez les genoux toujours pointés légèrement vers l'extérieur";
    }

}