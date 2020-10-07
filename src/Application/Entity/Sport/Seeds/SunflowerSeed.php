<?php


namespace App\Application\Entity\Sport\Seeds;


use App\Application\Entity\Sport\Aliment;

class SunflowerSeed extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Graine de tournesol";
        $this->calories = 5.84;
        $this->fat = 0.51;
        $this->carbohydrate = 0.2;
        $this->proteines = 0.21;

    }

}