<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class GreenAsparagus extends Legumes
{

    const PoidsMoyen = 60;

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Asperges verte";
        $this->calories = 0.263;
        $this->fat = 0.003;
        $this->carbohydrate = 0.025;
        $this->proteines = 0.025;
    }

    /**
     * @return int
     */
    public static function getPoidsMoyen()
    {
        return self::PoidsMoyen;
    }

}