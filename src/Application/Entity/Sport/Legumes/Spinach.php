<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class Spinach extends Legumes
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Epinards crues";
        $this->calories = 0.29;
        $this->fat = 0.00425;
        $this->carbohydrate = 0.0225;
        $this->proteines = 0.0262;
    }

}