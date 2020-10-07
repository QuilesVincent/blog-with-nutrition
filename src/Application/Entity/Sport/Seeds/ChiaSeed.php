<?php


namespace App\Application\Entity\Sport\Seeds;


use App\Application\Entity\Sport\Aliment;

class ChiaSeed extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Graine de chia";
        $this->calories = 4.86;
        $this->fat = 0.31;
        $this->carbohydrate = 0.42;
        $this->proteines = 0.17;

    }

}