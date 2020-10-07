<?php


namespace App\Application\Entity\Sport\Condiments;


use App\Application\Entity\Sport\Condiments;

class CurryPaste extends Condiments
{
    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Pâte de curry";
        $this->calories = 1.46;
        $this->fat = 0.07;
        $this->carbohydrate = 0.15;
        $this->proteines = 0.04;
    }

}