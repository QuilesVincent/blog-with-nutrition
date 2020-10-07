<?php


namespace App\Application\Entity\Sport\Fruits\FruitsRouges;


use App\Application\Entity\Sport\Fruits;

class Strawberry extends Fruits
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Fraise";
        $this->calories = 0.33;
        $this->fat = 0.003;
        $this->carbohydrate = 0.08;
        $this->proteines = 0.007;
    }

}