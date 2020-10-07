<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class Cardamom extends Feculents
{



    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Cardamome";
        $this->calories = 3.11;
        $this->fat = 0.067;
        $this->carbohydrate = 0.685;
        $this->proteines = 0.108;

    }


}