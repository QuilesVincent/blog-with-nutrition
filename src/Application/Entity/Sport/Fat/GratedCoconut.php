<?php


namespace App\Application\Entity\Sport\Fat;




use App\Application\Entity\Sport\Aliment;

class GratedCoconut extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Noix de coco rapée";
        $this->calories = 6.84;
        $this->fat = 0.69;
        $this->carbohydrate = 0.22;
        $this->proteines = 0.05 ;

    }

}