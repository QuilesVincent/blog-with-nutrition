<?php


namespace App\Application\Entity\Sport\Condiments;


use App\Application\Entity\Sport\Condiments;

class Cinnamon extends Condiments
{
    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Canelle";
        $this->calories = 0.00001;
        $this->fat = 0.00001;
        $this->carbohydrate = 0.00001;
        $this->proteines = 0.00001;
    }

}