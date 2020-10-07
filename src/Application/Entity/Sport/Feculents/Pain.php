<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class Pain extends Feculents
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Pain";
        $this->calories = 2.65;
        $this->fat = 0.032;
        $this->carbohydrate = 0.49;
        $this->proteines = 0.09;

    }

}