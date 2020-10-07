<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class MapleSyrup extends Feculents
{
    
    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Sirop d'érable";
        $this->calories = 2.60;
        $this->fat = 0.001;
        $this->carbohydrate = 0.67;
        $this->proteines = 0.000001;

    }

}