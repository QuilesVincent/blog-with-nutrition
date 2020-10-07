<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class Tomato extends Legumes
{

    const PoidsMoyen = 130;

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Tomates";
        $this->calories = 0.16;
        $this->fat = 0.003;
        $this->carbohydrate = 0.017;
        $this->proteines = 0.008;
    }

    public static function getPoidsMoyen()
    {
        return self::PoidsMoyen;
    }

}