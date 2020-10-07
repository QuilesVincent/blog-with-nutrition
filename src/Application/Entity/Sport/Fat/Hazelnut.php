<?php


namespace App\Application\Entity\Sport\Fat;




use App\Application\Entity\Sport\Aliment;

class Hazelnut extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Noisettes";
        $this->calories = 6.28;
        $this->fat = 0.61;
        $this->carbohydrate = 0.17;
        $this->proteines = 0.15;

    }

}