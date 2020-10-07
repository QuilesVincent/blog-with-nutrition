<?php


namespace App\Application\Entity\Sport\Fruits;


use App\Application\Entity\Sport\Fruits;

class Physalis extends Fruits
{

    use FruitEntier;

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Physalis";
        $this->calories = 0.53;
        $this->fat = 0.007;
        $this->carbohydrate = 0.112;
        $this->proteines = 0.019;
        $this->poidsFruitMoyen = 6;
    }

}