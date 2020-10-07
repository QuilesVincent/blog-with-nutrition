<?php


namespace App\Application\Entity\Sport\Fat;




use App\Application\Entity\Sport\Aliment;

class AlmondPuree extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Purée Amandes";
        $this->calories = 6.65;
        $this->fat = 0.585;
        $this->carbohydrate = 0.051;
        $this->proteines = 0.218;

    }

}