<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class TomatoConfit extends Legumes
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Tomates confites";
        $this->calories = 2.13;
        $this->fat = 0.14;
        $this->carbohydrate = 0.23;
        $this->proteines = 0.05;
    }

}