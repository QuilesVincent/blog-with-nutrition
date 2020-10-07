<?php


namespace App\Application\Entity\Sport\Fruits;


use App\Application\Entity\Sport\Fruits;

class Melon extends Fruits
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Melon";
        $this->calories = 0.34;
        $this->fat = 0.002;
        $this->carbohydrate = 0.08;
        $this->proteines = 0.008;
    }

}