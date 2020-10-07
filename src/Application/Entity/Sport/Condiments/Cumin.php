<?php


namespace App\Application\Entity\Sport\Condiments;


use App\Application\Entity\Sport\Condiments;

class Cumin extends Condiments
{
    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Cumin";
        $this->calories = 0.00001;
        $this->fat = 0.00001;
        $this->carbohydrate = 0.00001;
        $this->proteines = 0.00001;
    }

}