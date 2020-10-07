<?php


namespace App\Application\Entity\Sport\Meat\Other;


use App\Application\Entity\Sport\Aliment;

class CottageCheese0 extends Aliment
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Fromage blanc 0%";
        $this->calories = 0.48;
        $this->fat = 0.0000001;
        $this->carbohydrate = 0.045;
        $this->proteines = 0.075;
    }

}