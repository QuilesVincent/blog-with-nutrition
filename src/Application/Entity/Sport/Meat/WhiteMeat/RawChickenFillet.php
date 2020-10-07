<?php


namespace App\Application\Entity\Sport\Meat\WhiteMeat;

use App\Application\Entity\Sport\WhiteMeat;

class RawChickenFillet extends WhiteMeat
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Filet de poulet cru";
        $this->calories = 1.10;
        $this->fat = 0.024;
        $this->carbohydrate = 0.009;
        $this->proteines = 0.21;
    }

    public function setQuantityNeeded()
    {
        $quantityNeeded = $this->quantityCalories/$this->calories;
        if($quantityNeeded > 170){
            $this->quantityNeeded = 170;
        } else {
            $this->quantityNeeded = $quantityNeeded;
        }
    }

}