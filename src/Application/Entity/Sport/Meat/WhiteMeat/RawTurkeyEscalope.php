<?php


namespace App\Application\Entity\Sport\Meat\WhiteMeat;

use App\Application\Entity\Sport\WhiteMeat;

class RawTurkeyEscalope extends WhiteMeat
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Escalope de dinde cru";
        $this->calories = 0.91;
        $this->fat = 0.001;
        $this->carbohydrate = 0.01;
        $this->proteines = 0.23;
    }

}