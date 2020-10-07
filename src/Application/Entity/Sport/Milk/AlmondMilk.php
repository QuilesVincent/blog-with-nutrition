<?php


namespace App\Application\Entity\Sport\Milk;


use App\Application\Entity\Sport\Milk;

class AlmondMilk extends Milk
{
    public function __construct(int $quantityCalories)
    {
        parent::__construct($quantityCalories);
        $this->name = "Lait d'amande";
        $this->calories = 0.39;
        $this->fat = 0.015;
        $this->carbohydrate = 0.045;
        $this->proteines = 0.018;
    }

}