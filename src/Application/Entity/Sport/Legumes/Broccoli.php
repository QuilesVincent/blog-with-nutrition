<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class Broccoli extends Legumes
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Brocolis crues";
        $this->calories = 0.34;
        $this->fat = 0.004;
        $this->carbohydrate = 0.07;
        $this->proteines = 0.028;
    }

}