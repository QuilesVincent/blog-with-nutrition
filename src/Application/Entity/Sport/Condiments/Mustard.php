<?php


namespace App\Application\Entity\Sport\Condiments;


use App\Application\Entity\Sport\Condiments;

class Mustard extends Condiments
{
    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Moutarde";
        $this->calories = 0.66;
        $this->fat = 0.04;
        $this->carbohydrate = 0.05;
        $this->proteines = 0.044;
    }

}