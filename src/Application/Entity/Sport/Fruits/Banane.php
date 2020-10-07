<?php


namespace App\Application\Entity\Sport\Fruits;


use App\Application\Entity\Sport\Fruits;

class Banane extends Fruits
{
    use FruitEntier;

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Banane";
        $this->calories = 0.89;
        $this->fat = 0.003;
        $this->carbohydrate = 0.23;
        $this->proteines = 0.011;
        $this->poidsFruitMoyen = 120;

    }

}