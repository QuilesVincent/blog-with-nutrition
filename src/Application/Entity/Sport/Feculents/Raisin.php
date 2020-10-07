<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class Raisin extends Feculents
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Raisin sec";
        $this->calories = 3.03;
        $this->fat = 0.00578;
        $this->carbohydrate = 0.664;
        $this->proteines = 0.0299;

    }

}