<?php


namespace App\Application\Entity\Sport\Meat\RedMeat;

use App\Application\Entity\Sport\RedMeat;

class RawEntrecote extends RedMeat
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Entrecôte crue";
        $this->calories = 2.09;
        $this->fat = 0.1197;
        $this->carbohydrate = 0;
        $this->proteines = 0.2384;
    }

}