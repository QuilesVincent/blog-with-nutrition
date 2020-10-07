<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Aliment;

class GaletteWrap extends Aliment
{

    const PoidsMoyen = 41;

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Galette wrap";
        $this->calories = 1.75;
        $this->fat = 0.003;
        $this->carbohydrate = 0.31;
        $this->proteines = 0.053;

    }

    /**
     * @return int
     */
    public static function getPoidsMoyen()
    {
        return self::PoidsMoyen;
    }

}