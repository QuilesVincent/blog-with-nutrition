<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class CoralLentils extends Feculents
{


    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Lentilles corail";
        $this->calories = 3.34;
        $this->fat = 0.022;
        $this->carbohydrate = 0.48;
        $this->proteines = 0.25;

    }


}