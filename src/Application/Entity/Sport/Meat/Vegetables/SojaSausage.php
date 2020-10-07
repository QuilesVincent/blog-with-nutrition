<?php


namespace App\Application\Entity\Sport\Meat\Vegetables;

use App\Application\Entity\Sport\WhiteMeat;

class SojaSausage extends WhiteMeat
{
    const PoidsMoyenStatic = 40;

    private int $poidsMoyen;

    //Les valeurs nutritionnelles sont calculés en prenant en compte l'os pour 100 gr
    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Saucisse de soja";
        $this->calories = 2.67;
        $this->fat = 0.201;
        $this->carbohydrate = 0.068;
        $this->proteines = 0.148;
        $this->poidsMoyen = 40;
    }

    public static function getPoidsMoyen()
    {
        return self::PoidsMoyenStatic;
    }

}