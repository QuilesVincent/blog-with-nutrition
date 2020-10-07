<?php


namespace App\Application\Entity\Sport\Seeds;


use App\Application\Entity\Sport\Aliment;

class PumpkinSeed extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Graine de courge";
        $this->calories = 5.74;
        $this->fat = 0.4905;
        $this->carbohydrate = 0.1471;
        $this->proteines = 0.2984;

    }

}