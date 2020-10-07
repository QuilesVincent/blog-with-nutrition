<?php


namespace App\Application\Entity\Sport\Fish;

use App\Application\Entity\Sport\Fish;

class Mackerel extends Fish
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Maquereau cru";
        $this->calories = 1.57;
        $this->fat = 0.12;
        $this->carbohydrate = 0;
        $this->proteines = 0.12;
    }

}