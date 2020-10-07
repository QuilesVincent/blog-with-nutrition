<?php


namespace App\Application\Entity\Sport\Fat;




use App\Application\Entity\Sport\Aliment;

class PowderedNutmeg extends Aliment
{

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Noix de muscade en poudre";
        $this->calories = 5.25;
        $this->fat = 0.3631;
        $this->carbohydrate = 0.4929;
        $this->proteines = 0.0584;

    }


}