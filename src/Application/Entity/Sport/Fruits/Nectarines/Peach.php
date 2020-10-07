<?php


namespace App\Application\Entity\Sport\Fruits\Nectarines;


use App\Application\Entity\Sport\Fruits;
use App\Application\Entity\Sport\Fruits\FruitEntier;

class Peach extends Fruits
{

    use FruitEntier;

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Pêche";
        $this->calories = 0.39;
        $this->fat = 0.0025;
        $this->carbohydrate = 0.0954;
        $this->proteines = 0.0091;
        $this->poidsFruitMoyen = 150;
    }

}