<?php


namespace App\Application\Entity\Sport\Fruits\FruitsRouges;


use App\Application\Entity\Sport\Fruits;

class Grape extends Fruits
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Raisin";
        $this->calories = 0.67;
        $this->fat = 0.004;
        $this->carbohydrate = 0.17;
        $this->proteines = 0.06;
    }

}