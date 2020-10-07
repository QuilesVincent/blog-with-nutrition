<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class Chickpea extends Feculents
{



    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Pois chiches";
        $this->calories = 3.64;
        $this->fat = 0.06;
        $this->carbohydrate = 0.61;
        $this->proteines = 0.19;

    }


}