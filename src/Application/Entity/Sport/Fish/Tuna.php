<?php


namespace App\Application\Entity\Sport\Fish;

use App\Application\Entity\Sport\Fish;

class Tuna extends Fish
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Thon cru";
        $this->calories = 1.08;
        $this->fat = 0.0095;
        $this->carbohydrate = 0;
        $this->proteines = 0.2338;
    }

}