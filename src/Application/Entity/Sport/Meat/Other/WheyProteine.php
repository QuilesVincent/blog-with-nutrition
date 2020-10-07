<?php


namespace App\Application\Entity\Sport\Meat\Other;


use App\Application\Entity\Sport\Milk;

class WheyProteine extends Milk
{

    public function __construct(int $quantityCalories)
    {
        parent::__construct($quantityCalories);
        $this->name = "Whey protéines";
        $this->calories = 4.04;
        $this->fat = 0.075;
        $this->carbohydrate = 0.04;
        $this->proteines = 0.8;
    }

}