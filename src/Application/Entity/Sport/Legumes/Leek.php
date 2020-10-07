<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class Leek extends Legumes
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Poireaux crues";
        $this->calories = 0.61;
        $this->fat = 0.003;
        $this->carbohydrate = 0.014;
        $this->proteines = 0.015;
    }

}