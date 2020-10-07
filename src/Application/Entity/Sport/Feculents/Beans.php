<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class Beans extends Feculents
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Fèves";
        $this->calories = 3.41;
        $this->fat = 0.015;
        $this->carbohydrate = 0.583;
        $this->proteines = 0.261;

    }

}