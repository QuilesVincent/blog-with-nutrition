<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class MuesliWithoutSugar extends Feculents
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Muesli sans sucre";
        $this->calories = 3.41;
        $this->fat = 0.063;
        $this->carbohydrate = 0.53;
        $this->proteines = 0.12;

    }

}