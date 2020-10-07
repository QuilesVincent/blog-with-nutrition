<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class SweetPotatoes extends Feculents
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Patates douces";
        $this->calories = 0.86;
        $this->fat = 0.001;
        $this->carbohydrate = 0.2;
        $this->proteines = 0.016;

    }

}