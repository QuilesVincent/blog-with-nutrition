<?php


namespace App\Application\Entity\Sport\Fat;




use App\Application\Entity\Sport\Aliment;

class Almond extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Amandes";
        $this->calories = 5.76;
        $this->fat = 0.4942;
        $this->carbohydrate = 0.2167;
        $this->proteines = 0.212;

    }

}