<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class GreedyPeas extends Feculents
{



    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Poids gourmand";
        $this->calories = 0.81;
        $this->fat = 0.004;
        $this->carbohydrate = 0.14;
        $this->proteines = 0.05;

    }


}