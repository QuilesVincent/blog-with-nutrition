<?php


namespace App\Application\Entity\Sport\Other;


use App\Application\Entity\Sport\Aliment;

class TofouSoyeux extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Tofou Soyeux";
        $this->calories = 0.54;
        $this->fat = 0.029;
        $this->carbohydrate = 0.014;
        $this->proteines = 0.052;

    }


}