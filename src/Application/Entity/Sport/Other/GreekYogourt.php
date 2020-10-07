<?php


namespace App\Application\Entity\Sport\Other;


use App\Application\Entity\Sport\Aliment;

class GreekYogourt extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Yaourt à la grecque";
        $this->calories = 0.59;
        $this->fat = 0.004;
        $this->carbohydrate = 0.036;
        $this->proteines = 0.1;

    }


}