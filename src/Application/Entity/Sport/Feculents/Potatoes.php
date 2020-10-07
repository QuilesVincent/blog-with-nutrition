<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class Potatoes extends Feculents
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Pomme de terre";
        $this->calories = 0.87;
        $this->fat = 0.001;
        $this->carbohydrate = 0.2013;
        $this->proteines = 0.0187;

    }

}