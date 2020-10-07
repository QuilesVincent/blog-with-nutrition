<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class Mushroom extends Legumes
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Champignons crues";
        $this->calories = 0.22;
        $this->fat = 0.003;
        $this->carbohydrate = 0.033;
        $this->proteines = 0.031;
    }

}