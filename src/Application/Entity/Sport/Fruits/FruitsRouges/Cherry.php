<?php


namespace App\Application\Entity\Sport\Fruits\FruitsRouges;


use App\Application\Entity\Sport\Fruits;

class Cherry extends Fruits
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Cerise";
        $this->calories = 0.50;
        $this->fat = 0.003;
        $this->carbohydrate = 0.12;
        $this->proteines = 0.01;
    }

}