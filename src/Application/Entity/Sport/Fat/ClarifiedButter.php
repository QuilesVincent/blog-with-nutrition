<?php


namespace App\Application\Entity\Sport\Fat;




use App\Application\Entity\Sport\Aliment;

class ClarifiedButter extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Beurre clarifié";
        $this->calories = 7.48;
        $this->fat = 0.84;
        $this->carbohydrate = 0.0000001;
        $this->proteines = 0.0000001;

    }

}