<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class CookedRiceNoodle extends Feculents
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Nouilles de riz cuites";
        $this->calories = 1.09;
        $this->fat = 0.002;
        $this->carbohydrate = 0.25;
        $this->proteines = 0.09;

    }

}