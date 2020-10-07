<?php


namespace App\Application\Entity\Sport\Meat\Other;


use App\Application\Entity\Sport\Aliment;

class Eggs extends Aliment
{

    const PoidsPetit = 50;
    const PoidsMoyen = 55;
    const PoidsGrand = 65;

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Oeuf";
        $this->calories = 1.45;
        $this->fat = 0.10;
        $this->carbohydrate = 0.00981;
        $this->proteines = 0.117995;
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