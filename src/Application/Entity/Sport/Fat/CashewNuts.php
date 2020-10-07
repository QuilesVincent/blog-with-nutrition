<?php


namespace App\Application\Entity\Sport\Fat;




use App\Application\Entity\Sport\Aliment;

class CashewNuts extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Noix de cajoux";
        $this->calories = 6.31;
        $this->fat = 0.191;
        $this->carbohydrate = 0.218;
        $this->proteines = 0.198;

    }

}