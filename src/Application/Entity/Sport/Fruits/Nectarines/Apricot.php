<?php


namespace App\Application\Entity\Sport\Fruits\Nectarines;


use App\Application\Entity\Sport\Fruits;
use App\Application\Entity\Sport\Fruits\FruitEntier;

class Apricot extends Fruits
{

    use FruitEntier;

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Abricot";
        $this->calories = 0.48;
        $this->fat = 0.004;
        $this->carbohydrate = 0.11;
        $this->proteines = 0.014;
        $this->poidsFruitMoyen = 60;
    }

}