<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class CookedPasta extends Feculents
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Pâtes cuites";
        $this->calories = 1.3;
        $this->fat = 0.008;
        $this->carbohydrate = 0.11;
        $this->proteines = 0.02;

    }

}