<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class RawRice extends Feculents
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Riz cru";
        $this->calories = 3.57;
        $this->fat = 0.011;
        $this->carbohydrate = 0.75;
        $this->proteines = 0.15;

    }

}