<?php


namespace App\Application\Entity\Sport\Seeds;


use App\Application\Entity\Sport\Aliment;

class SesameSeed extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Graine de sésame";
        $this->calories = 5.73;
        $this->fat = 0.5;
        $this->carbohydrate = 0.23;
        $this->proteines = 0.18;

    }

}