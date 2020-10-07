<?php


namespace App\Application\Entity\Sport\Fish;

use App\Application\Entity\Sport\Fish;

class Sardine extends Fish
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Sardines crues";
        $this->calories = 1.52;
        $this->fat = 0.089;
        $this->carbohydrate = 0;
        $this->proteines = 0.18;
    }

}