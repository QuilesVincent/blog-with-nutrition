<?php


namespace App\Application\Entity\Sport\Fat;




use App\Application\Entity\Sport\Aliment;

class CocoMilk extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Lait de coco";
        $this->calories = 2.3;
        $this->fat = 0.24;
        $this->carbohydrate = 0.06;
        $this->proteines = 0.023 ;

    }

}