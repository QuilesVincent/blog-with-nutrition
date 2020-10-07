<?php


namespace App\Application\Entity\Sport\Fat;




use App\Application\Entity\Sport\Aliment;
use App\Application\Entity\Sport\Fruits\FruitEntier;

class Avocado extends Aliment
{

    use FruitEntier;

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Avocat";
        $this->calories = 1.6;
        $this->fat = 0.15;
        $this->carbohydrate = 0.09;
        $this->proteines = 0.02;
        $this->poidsFruitMoyen = 300;

    }

}