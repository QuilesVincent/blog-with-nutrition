<?php


namespace App\Application\Entity\Sport\Fish;

use App\Application\Entity\Sport\Fish;

class Shrimp extends Fish
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Crevettes crue";
        $this->calories = 0.99;
        $this->fat = 0.003;
        $this->carbohydrate = 0.002;
        $this->proteines = 0.24;
    }

}