<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class ApricotJacket extends Feculents
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Confiture d'abricot";
        $this->calories = 2.78;
        $this->fat = 0.007;
        $this->carbohydrate = 0.6886;
        $this->proteines = 0.0037;

    }

}