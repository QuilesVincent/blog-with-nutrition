<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class Pepper extends Legumes
{

    const PoidsMoyen = 170;

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Poivrons crues";
        $this->calories = 0.23;
        $this->fat = 0.003;
        $this->carbohydrate = 0.05;
        $this->proteines = 0.011;
    }

    /**
     * @return int
     */
    public static function getPoidsMoyen()
    {
        return self::PoidsMoyen;
    }

}