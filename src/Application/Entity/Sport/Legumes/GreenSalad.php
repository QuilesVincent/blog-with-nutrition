<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class GreenSalad extends Legumes
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Salade verte";
        $this->calories = 0.146;
        $this->fat = 0.002;
        $this->carbohydrate = 0.0137;
        $this->proteines = 0.013;
    }

}