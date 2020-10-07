<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class BagelSesame extends Feculents
{

    const PoidsMoyen = 85;

    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->name = "Bagel Sésame";
        $this->calories = 2.90;
        $this->fat = 0.032;
        $this->carbohydrate = 0.52;
        $this->proteines = 0.11;

    }

    public static function getPoidsMoyen()
    {
        return self::PoidsMoyen;
    }

}