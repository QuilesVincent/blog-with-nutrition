<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class Cauliflower extends Legumes
{


    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Choux fleur";
        $this->calories = 0.25;
        $this->fat = 0.003;
        $this->carbohydrate = 0.05;
        $this->proteines = 0.019;
    }

}