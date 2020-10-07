<?php


namespace App\Application\Entity\Sport\Meat\RedMeat;




use App\Application\Entity\Sport\WhiteMeat;

class RawRedMeat5 extends WhiteMeat
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Viande rouge 5% crue";
        $this->calories = 1.38;
        $this->fat = 0.05;
        $this->carbohydrate = 0;
        $this->proteines = 0.2141;
    }

}