<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class Eggplant extends Legumes
{

    const PoidsMoyen = 225;

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Aubergines crues";
        $this->calories = 0.25;
        $this->fat = 0.002;
        $this->carbohydrate = 0.06;
        $this->proteines = 0.01;
    }

    public static function getPoidsMoyen()
    {
        return self::PoidsMoyen;
    }

}