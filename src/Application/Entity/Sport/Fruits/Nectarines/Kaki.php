<?php


namespace App\Application\Entity\Sport\Fruits\Nectarines;


use App\Application\Entity\Sport\Fruits;
use App\Application\Entity\Sport\Fruits\FruitEntier;

class Kaki extends Fruits
{

    use FruitEntier;

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Clémentine";
        $this->calories = 1.27;
        $this->fat = 0.004;
        $this->carbohydrate = 0.34;
        $this->proteines = 0.008;
        $this->poidsFruitMoyen = 400;
    }

}