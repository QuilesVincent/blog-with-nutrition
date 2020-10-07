<?php


namespace App\Application\Entity\Sport\Fat;




use App\Application\Entity\Sport\Aliment;

class AlmondButter extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Beurre d'amandes";
        $this->calories = 6.14;
        $this->fat = 0.56;
        $this->carbohydrate = 0.19;
        $this->proteines = 0.21;

    }

}