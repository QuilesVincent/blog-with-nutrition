<?php


namespace App\Application\Entity\Sport\Fruits;


use App\Application\Entity\Sport\Fruits;

class Pineapple extends Fruits
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Ananas";
        $this->calories = 0.50;
        $this->fat = 0.001;
        $this->carbohydrate = 0.013;
        $this->proteines = 0.005;

    }

}