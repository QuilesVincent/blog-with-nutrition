<?php


namespace App\Application\Entity\Sport\Fish;

use App\Application\Entity\Sport\Fish;

class Monkfish extends Fish
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Lotte cru";
        $this->calories = 0.966;
        $this->fat = 0.006;
        $this->carbohydrate = 0.0000001;
        $this->proteines = 0.227;
    }

}