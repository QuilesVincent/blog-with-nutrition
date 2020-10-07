<?php


namespace App\Application\Entity\Sport\Fruits\FruitsRouges;


use App\Application\Entity\Sport\Fruits;

class Raspberry extends Fruits
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Framboise";
        $this->calories = 0.53;
        $this->fat = 0.007;
        $this->carbohydrate = 0.12;
        $this->proteines = 0.012;
    }

}