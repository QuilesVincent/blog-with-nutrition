<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class Dates extends Feculents
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Dattes";
        $this->calories = 2.82;
        $this->fat = 0.004;
        $this->carbohydrate = 0.75;
        $this->proteines = 0.025;

    }

}