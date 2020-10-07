<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class RawPasta extends Feculents
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Pâtes crues";
        $this->calories = 3.51;
        $this->fat = 0.025;
        $this->carbohydrate = 0.7;
        $this->proteines = 0.12;

    }

}