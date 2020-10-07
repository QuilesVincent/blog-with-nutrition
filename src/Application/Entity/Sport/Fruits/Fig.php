<?php


namespace App\Application\Entity\Sport\Fruits;


use App\Application\Entity\Sport\Fruits;

class Fig extends Fruits
{
    const PoidsMoyen = 50;

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Figue";
        $this->calories = 0.668;
        $this->fat = 0.003;
        $this->carbohydrate = 0.134;
        $this->proteines = 0.013;
        $this->poidsFruitMoyen = 50;

    }


    /**
     * @return int
     */
    public static function getPoidsMoyen(): int
    {
        return self::PoidsMoyen;
    }

}