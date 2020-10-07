<?php


namespace App\Application\Entity\Sport\Fish;

use App\Application\Entity\Sport\Fish;

class SmokedSalmon extends Fish
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Saumon fumé";
        $this->calories = 1.17;
        $this->fat = 0.043;
        $this->carbohydrate = 0.00001;
        $this->proteines = 0.18;
    }

}