<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class OatBran extends Feculents
{
    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Son d'avoines";
        $this->calories = 2.79;
        $this->fat = 0.03;
        $this->carbohydrate = 0.5;
        $this->proteines = 0.13;

    }

}