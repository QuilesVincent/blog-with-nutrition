<?php


namespace App\Application\Entity\Sport\Sugar\Natural;


use App\Application\Entity\Sport\Aliment;

class Honey extends Aliment
{

    public function __construct(int $quantityCalories)
    {
        parent::__construct($quantityCalories);
        $this->name = "Miel";
        $this->calories = 3.04;
        $this->fat = 0.0000001;
        $this->carbohydrate = 0.82;
        $this->proteines = 0.003;
    }

}