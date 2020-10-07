<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class CookedRice extends Feculents
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Riz cuit";
        $this->calories = 1.3;
        $this->fat = 0.003;
        $this->carbohydrate = 0.28;
        $this->proteines = 0.027;

    }

}