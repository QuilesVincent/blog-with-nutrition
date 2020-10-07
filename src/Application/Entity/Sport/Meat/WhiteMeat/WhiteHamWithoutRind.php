<?php


namespace App\Application\Entity\Sport\Meat\WhiteMeat;

use App\Application\Entity\Sport\WhiteMeat;

class WhiteHamWithoutRind extends WhiteMeat
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Jambon blanc sans couenne";
        $this->calories = 1.115;
        $this->fat = 0.028;
        $this->carbohydrate = 0.01;
        $this->proteines = 0.22;
    }

}