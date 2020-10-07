<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class Beet extends Legumes
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Betterave rouge";
        $this->calories = 0.43;
        $this->fat = 0.001;
        $this->carbohydrate = 0.0717;
        $this->proteines = 0.023;
    }

}