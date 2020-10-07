<?php


namespace App\Application\Entity\Sport\Sauce;


use App\Application\Entity\Sport\Sauce;

class SojaSauce extends Sauce
{
    public function __construct(int $quantityCalories)
    {
        parent::__construct($quantityCalories);
        $this->name = "Sauce soja";
        $this->calories = 0.53;
        $this->fat = 0.006;
        $this->carbohydrate = 0.049;
        $this->proteines = 0.08;

    }


}