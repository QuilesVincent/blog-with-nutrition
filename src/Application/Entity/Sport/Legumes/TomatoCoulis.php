<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class TomatoCoulis extends Legumes
{


    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Coulis de tomates";
        $this->calories = 0.29;
        $this->fat = 0.002;
        $this->carbohydrate = 0.07;
        $this->proteines = 0.013;
    }

}