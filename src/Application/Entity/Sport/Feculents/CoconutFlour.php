<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class CoconutFlour extends Feculents
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Farine de Coco";
        $this->calories = 4.16;
        $this->fat = 0.1499;
        $this->carbohydrate = 0.5882;
        $this->proteines = 0.1555;

    }

}