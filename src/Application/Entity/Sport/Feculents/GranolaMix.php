<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class GranolaMix extends Feculents
{


    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Granola mix";
        $this->calories = 4.71;
        $this->fat = 0.20;
        $this->carbohydrate = 0.64;
        $this->proteines = 0.10;

    }


}