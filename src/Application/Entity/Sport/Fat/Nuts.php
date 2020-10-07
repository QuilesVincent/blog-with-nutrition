<?php


namespace App\Application\Entity\Sport\Fat;




use App\Application\Entity\Sport\Aliment;

class Nuts extends Aliment
{

    const PoidsMoyen = 10;

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Noix";
        $this->calories = 6.50;
        $this->fat = 0.65;
        $this->carbohydrate = 0.14;
        $this->proteines = 0.15;

    }

    public static function getPoidsMoyen()
    {
        return self::PoidsMoyen;
    }

}