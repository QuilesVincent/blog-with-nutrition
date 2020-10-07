<?php


namespace App\Application\Entity\Sport\Meat\Other;


use App\Application\Entity\Sport\Aliment;

class EggsWhites extends Aliment
{

    const PoidsPetit = 30;
    const PoidsMoyen = 35;
    const PoidsGrand = 40;

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Blanc d'oeuf";
        $this->calories = 0.52;
        $this->fat = 0.0002;
        $this->carbohydrate = 0.0007;
        $this->proteines = 0.11;
    }

    public static function getPoidsPetit()
    {
        return self::PoidsPetit;

    }

    public static function getPoidsMoyen()
    {
        return self::PoidsMoyen;

    }

    public static function getPoidsGrand()
    {
        return self::PoidsGrand;

    }

}