<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class Cucumber extends Legumes
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Concombre";
        $this->calories = 0.13;
        $this->fat = 0.0011;
        $this->carbohydrate = 0.0204;
        $this->proteines = 0.0064;
    }

}