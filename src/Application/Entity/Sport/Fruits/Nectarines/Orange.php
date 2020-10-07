<?php


namespace App\Application\Entity\Sport\Fruits\Nectarines;


use App\Application\Entity\Sport\Fruits;
use App\Application\Entity\Sport\Fruits\FruitEntier;

class Orange extends Fruits
{

    use FruitEntier;

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Orange";
        $this->calories = 0.49;
        $this->fat = 0.0015;
        $this->carbohydrate = 0.1254;
        $this->proteines = 0.0091;
        $this->poidsFruitMoyen = 220;
    }

}