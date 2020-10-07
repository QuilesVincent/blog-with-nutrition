<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class Shallot extends Legumes
{

    const PoidsMoyen = 100;

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Echalote";
        $this->calories = 0.72;
        $this->fat = 0.001;
        $this->carbohydrate = 0.17;
        $this->proteines = 0.025;
    }

    public static function getPoidsMoyen()
    {
        return self::PoidsMoyen;
    }

}