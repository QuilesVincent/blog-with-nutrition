<?php


namespace App\Application\Entity\Sport\Fat;




use App\Application\Entity\Sport\Aliment;

class SoyCream extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Crème de soja";
        $this->calories = 1.67;
        $this->fat = 0.16;
        $this->carbohydrate = 0.024;
        $this->proteines = 0.027 ;

    }

}