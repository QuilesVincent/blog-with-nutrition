<?php


namespace App\Application\Entity\Sport\Tea;


use App\Application\Entity\Sport\Aliment;

class MatchaTea extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Thé matcha";
        $this->calories = 0.00001;
        $this->fat = 0.00001;
        $this->carbohydrate = 0.00001;
        $this->proteines = 0.00001;

    }


}