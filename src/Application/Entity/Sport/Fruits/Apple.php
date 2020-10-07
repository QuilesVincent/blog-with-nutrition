<?php


namespace App\Application\Entity\Sport\Fruits;


use App\Application\Entity\Sport\Fruits;

class Apple extends Fruits
{

    use FruitEntier;

    const PoidsMoyen = 120;

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Pomme";
        $this->calories = 0.52;
        $this->fat = 0.002;
        $this->carbohydrate = 0.14;
        $this->proteines = 0.003;
        $this->poidsFruitMoyen = 120;
    }

    public static function getPoidsMoyen(): int
    {
        return self::PoidsMoyen;
    }

}