<?php


namespace App\Application\Entity\Sport\Fruits\Nectarines;


use App\Application\Entity\Sport\Fruits;
use App\Application\Entity\Sport\Fruits\FruitEntier;

class Clementine extends Fruits
{

    use FruitEntier;

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Clémentine";
        $this->calories = 0.47;
        $this->fat = 0.002;
        $this->carbohydrate = 0.12;
        $this->proteines = 0.009;
        $this->poidsFruitMoyen = 55;
    }

}