<?php


namespace App\Application\Entity\Sport\Fat\Cheese;




use App\Application\Entity\Sport\Aliment;

class ParmigianoReggiano extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Parmesan";
        $this->calories = 4.31;
        $this->fat = 0.29;
        $this->carbohydrate = 0.041;
        $this->proteines = 0.38;

    }

}