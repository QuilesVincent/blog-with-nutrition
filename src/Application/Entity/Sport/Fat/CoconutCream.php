<?php


namespace App\Application\Entity\Sport\Fat;




use App\Application\Entity\Sport\Aliment;

class CoconutCream extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Crème de coco";
        $this->calories = 3.3;
        $this->fat = 0.35;
        $this->carbohydrate = 0.07;
        $this->proteines = 0.036 ;

    }

}