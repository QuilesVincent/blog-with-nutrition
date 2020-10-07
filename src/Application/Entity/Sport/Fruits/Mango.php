<?php


namespace App\Application\Entity\Sport\Fruits;


use App\Application\Entity\Sport\Fruits;

class Mango extends Fruits
{

    use FruitEntier;

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Mangue";
        $this->calories = 0.60;
        $this->fat = 0.004;
        $this->carbohydrate = 0.15;
        $this->proteines = 0.008;
        $this->poidsFruitMoyen = 400;
    }

}