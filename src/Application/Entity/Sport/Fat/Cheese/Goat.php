<?php


namespace App\Application\Entity\Sport\Fat\Cheese;




use App\Application\Entity\Sport\Aliment;

class Goat extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Chèvre";
        $this->calories = 3.64;
        $this->fat = 0.30;
        $this->carbohydrate = 0.001;
        $this->proteines = 0.22;

    }

}