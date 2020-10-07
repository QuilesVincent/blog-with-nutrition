<?php


namespace App\Application\Entity\Sport\Exercices\Abs;


use App\Application\Entity\Sport\AbstractExercice;

class Candle extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Chandelle";
        $this->partOfTheBodyUsed = ["principale" => "Abdos"];
        $this->level = 3;
        $this->neededMateriel = false;

        $this->instructions = "A définir";
    }

}