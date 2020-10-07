<?php


namespace App\Application\Entity\Sport\Fat;




use App\Application\Entity\Sport\Aliment;

class PeanutButter extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Beurre de cacachuète";
        $this->calories = 5.88;
        $this->fat = 0.5;
        $this->carbohydrate = 0.2;
        $this->proteines = 0.25;

    }

}