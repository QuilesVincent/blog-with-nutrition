<?php


namespace App\Application\Entity\Sport\Sugar\Natural;


use App\Application\Entity\Sport\Aliment;

class Stevia extends Aliment
{

    public function __construct(int $quantityCalories)
    {
        parent::__construct($quantityCalories);
        $this->name = "Stevia";
        $this->calories = 0.0000001;
        $this->fat = 0.0000001;
        $this->carbohydrate = 0.0000001;
        $this->proteines = 0.0000001;
    }

}