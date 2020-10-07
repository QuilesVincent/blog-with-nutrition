<?php


namespace App\Application\Entity\Sport\Fat\Cheese;




use App\Application\Entity\Sport\Aliment;

class GratedCheese extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Gruyère rapé";
        $this->calories = 3.77;
        $this->fat = 0.29;
        $this->carbohydrate = 0.01;
        $this->proteines = 0.28;

    }

}