<?php


namespace App\Application\Entity\Sport\Fat\Cheese;




use App\Application\Entity\Sport\Aliment;

class CreamCheese extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Cream cheese";
        $this->calories = 3.42;
        $this->fat = 0.34;
        $this->carbohydrate = 0.041;
        $this->proteines = 0.06;

    }

}