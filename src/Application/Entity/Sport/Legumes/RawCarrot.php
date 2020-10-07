<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class RawCarrot extends Legumes
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Carrotes crues";
        $this->calories = 0.41;
        $this->fat = 0.0024;
        $this->carbohydrate = 0.0958;
        $this->proteines = 0.0093;
    }

}