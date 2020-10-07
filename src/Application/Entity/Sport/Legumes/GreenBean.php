<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class GreenBean extends Legumes
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Haricots verts crues";
        $this->calories = 0.31;
        $this->fat = 0.001;
        $this->carbohydrate = 0.07;
        $this->proteines = 0.018;
    }

}