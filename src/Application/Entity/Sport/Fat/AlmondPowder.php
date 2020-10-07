<?php


namespace App\Application\Entity\Sport\Fat;




use App\Application\Entity\Sport\Aliment;

class AlmondPowder extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Poudre d'amandes";
        $this->calories = 6.34;
        $this->fat = 0.54;
        $this->carbohydrate = 0.17;
        $this->proteines = 0.20;

    }

}