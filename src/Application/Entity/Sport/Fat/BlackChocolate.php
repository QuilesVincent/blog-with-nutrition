<?php


namespace App\Application\Entity\Sport\Fat;




use App\Application\Entity\Sport\Aliment;

class BlackChocolate extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 3;
        $this->name = "Chocolat noir";
        $this->calories = 6.33;
        $this->fat = 0.512;
        $this->carbohydrate = 0.366;
        $this->proteines = 0.063;

    }

}