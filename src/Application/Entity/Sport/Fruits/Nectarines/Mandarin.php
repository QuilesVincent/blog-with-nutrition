<?php


namespace App\Application\Entity\Sport\Fruits\Nectarines;


use App\Application\Entity\Sport\Fruits;
use App\Application\Entity\Sport\Fruits\FruitEntier;

class Mandarin extends Fruits
{

    use FruitEntier;

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Mandarine";
        $this->calories = 0.53;
        $this->fat = 0.0031;
        $this->carbohydrate = 0.1334;
        $this->proteines = 0.0081;
        $this->poidsFruitMoyen = 55;
    }

}