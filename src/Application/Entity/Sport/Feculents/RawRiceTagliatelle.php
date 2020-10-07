<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class RawRiceTagliatelle extends Feculents
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Tagliatelles de riz";
        $this->calories = 3.53;
        $this->fat = 0.000001;
        $this->carbohydrate = 0.80;
        $this->proteines = 0.06;

    }

}