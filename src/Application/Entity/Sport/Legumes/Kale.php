<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class Kale extends Legumes
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Choux frisé";
        $this->calories = 0.49;
        $this->fat = 0.009;
        $this->carbohydrate = 0.09;
        $this->proteines = 0.043;
    }

}