<?php


namespace App\Application\Entity\Sport\Fish;

use App\Application\Entity\Sport\Fish;

class Salmon extends Fish
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Saumon cru";
        $this->calories = 2.08;
        $this->fat = 0.13;
        $this->carbohydrate = 0;
        $this->proteines = 0.20;
    }

}