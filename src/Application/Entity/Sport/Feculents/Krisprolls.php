<?php


namespace App\Application\Entity\Sport\Feculents;


use App\Application\Entity\Sport\Feculents;

class Krisprolls extends Feculents
{
    const PoidsMoyen = 13;

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Krisprolls";
        $this->calories = 4.30;
        $this->fat = 0.1;
        $this->carbohydrate = 0.71;
        $this->proteines = 0.1;
    }

    public static function getPoidsMoyen()
    {
        return self::PoidsMoyen;
    }

}