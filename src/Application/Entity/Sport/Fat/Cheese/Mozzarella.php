<?php


namespace App\Application\Entity\Sport\Fat\Cheese;




use App\Application\Entity\Sport\Aliment;

class Mozzarella extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Mozarella";
        $this->calories = 2.80;
        $this->fat = 0.17;
        $this->carbohydrate = 0.031;
        $this->proteines = 0.28;

    }

}