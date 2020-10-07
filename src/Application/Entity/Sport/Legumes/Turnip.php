<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class Turnip extends Legumes
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Navets crues";
        $this->calories = 0.28;
        $this->fat = 0.001;
        $this->carbohydrate = 0.06;
        $this->proteines = 0.009;
    }

}