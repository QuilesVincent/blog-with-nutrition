<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class BuckwheatFlour extends Feculents
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Farine de sarrasin";
        $this->calories = 3.47;
        $this->fat = 0.0224;
        $this->carbohydrate = 0.705;
        $this->proteines = 0.0911;

    }

}