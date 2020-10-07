<?php


namespace App\Application\Entity\Sport\Fruits\FruitsRouges;


use App\Application\Entity\Sport\Fruits;

class Bluebbery extends Fruits
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Myrtille";
        $this->calories = 0.60;
        $this->fat = 0.002;
        $this->carbohydrate = 0.116;
        $this->proteines = 0.006;
    }

}