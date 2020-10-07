<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class RedOignon extends Legumes
{

    const PoidsMoyen = 100;

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Oignons rouge";
        $this->calories = 0.4;
        $this->fat = 0.001;
        $this->carbohydrate = 0.09;
        $this->proteines = 0.011;
    }

    public static function getPoidsMoyen()
    {
        return self::PoidsMoyen;
    }

}