<?php


namespace App\Application\Entity\Sport\Fat\Cheese;




use App\Application\Entity\Sport\Aliment;

class Feta extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Feta";
        $this->calories = 2.61;
        $this->fat = 0.2128;
        $this->carbohydrate = 0.0409;
        $this->proteines = 0.1421;

    }

}