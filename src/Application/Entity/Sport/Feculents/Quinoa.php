<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class Quinoa extends Feculents
{


    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Quinoa";
        $this->calories = 3.99;
        $this->fat = 0.063;
        $this->carbohydrate = 0.69;
        $this->proteines = 0.165;

    }


}