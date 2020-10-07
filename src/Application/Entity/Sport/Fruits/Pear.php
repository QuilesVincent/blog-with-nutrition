<?php


namespace App\Application\Entity\Sport\Fruits;


use App\Application\Entity\Sport\Fruits;

class Pear extends Fruits
{

    use FruitEntier;

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Poire";
        $this->calories = 0.57;
        $this->fat = 0.001;
        $this->carbohydrate = 0.015;
        $this->proteines = 0.04;
        $this->poidsFruitMoyen = 120;

    }

}