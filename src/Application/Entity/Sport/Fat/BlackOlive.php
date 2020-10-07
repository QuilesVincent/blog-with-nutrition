<?php


namespace App\Application\Entity\Sport\Fat;


use App\Application\Entity\Sport\Aliment;

class BlackOlive extends Aliment
{

    const PoidsMoyen = 4;

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
        $this->name = "Olives noires";
        $this->calories = 1.23;
        $this->fat = 0.13;
        $this->carbohydrate = 0.000001;
        $this->proteines = 0.005;

    }

    /**
     * @return int
     */
    public static function getPoidsMoyen()
    {
        return self::PoidsMoyen;

    }

}