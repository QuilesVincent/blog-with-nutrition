<?php


namespace App\Application\Entity\Sport\Meat\WhiteMeat;

use App\Application\Entity\Sport\WhiteMeat;

class ChickenThigh extends WhiteMeat
{
    const PoidsMoyenStatic = 250;

    private int $poidsMoyen;

    //Les valeurs nutritionnelles sont calculés en prenant en compte l'os pour 100 gr
    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Cuisse de poulet cru";
        $this->calories = 1.5312;
        $this->fat = 0.0888096;
        $this->carbohydrate = 0.00000001;
        $this->proteines = 0.171336;
        $this->poidsMoyen = 250;
    }

    public static function getPoidsMoyen()
    {
        return self::PoidsMoyenStatic;
    }

}