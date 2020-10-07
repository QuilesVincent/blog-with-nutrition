<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class Cacaco extends Feculents
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Cacao";
        $this->calories = 3.66;
        $this->fat = 0.21;
        $this->carbohydrate = 0.087;
        $this->proteines = 0.2;

    }

}