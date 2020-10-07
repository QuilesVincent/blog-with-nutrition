<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class OatMeal extends Feculents
{
    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Flocons d'avoines";
        $this->calories = 3.50;
        $this->fat = 0.07;
        $this->carbohydrate = 0.58;
        $this->proteines = 0.13;

    }

}