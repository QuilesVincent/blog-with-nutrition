<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class CherryTomato extends Legumes
{

    const PoidsMoyen = 20;

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Tomates cerises";
        $this->calories = 0.20;
        $this->fat = 0.003;
        $this->carbohydrate = 0.035;
        $this->proteines = 0.008;
    }

    /**
     * @return int
     */
    public static function getPoidsMoyen()
    {
        return self::PoidsMoyen;
    }

}