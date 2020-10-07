<?php


namespace App\Application\Entity\Sport\Meat\Other;


use App\Application\Entity\Sport\Aliment;

class CottageCheese extends Aliment
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Fromage blanc";
        $this->calories = 0.70;
        $this->fat = 0.03;
        $this->carbohydrate = 0.045;
        $this->proteines = 0.063;
    }

}