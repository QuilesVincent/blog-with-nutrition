<?php


namespace App\Application\Entity\Sport\Oil;


use App\Application\Entity\Sport\Oil;

class CocoOil extends Oil
{
    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Huile de coco";
        $this->calories = 8.62;
        $this->fat = 1;
        $this->carbohydrate = 0;
        $this->proteines = 0;
    }

}