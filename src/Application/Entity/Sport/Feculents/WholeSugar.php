<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class WholeSugar extends Feculents
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Sucre complet";
        $this->calories = 3.93;
        $this->fat = 0.0000001;
        $this->carbohydrate = 0.98;
        $this->proteines = 0.0000001;

    }

}