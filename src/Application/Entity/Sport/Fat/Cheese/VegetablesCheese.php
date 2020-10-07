<?php


namespace App\Application\Entity\Sport\Fat\Cheese;




use App\Application\Entity\Sport\Aliment;

class VegetablesCheese extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Yaourt végétal";
        $this->calories = 0.76;
        $this->fat = 0.049;
        $this->carbohydrate = 0.074;
        $this->proteines = 0.006;

    }

}