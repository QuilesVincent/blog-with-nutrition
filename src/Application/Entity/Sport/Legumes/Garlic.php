<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

/**
 * Class Garlic
 * @package App\Application\Entity\Sport\Legumes
 */
class Garlic extends Legumes
{

    const PoidsMoyen = 8;

    /**
     * @var int
     */
    private int $poidsGousse;

    /**
     * Garlic constructor.
     * @param int $quantity
     */
    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Ail";
        $this->calories = 1.3;
        $this->fat = 0.005;
        $this->carbohydrate = 0.25;
        $this->proteines = 0.07;
        $this->poidsGousse = 8;
    }

    /**
     * @return int
     */
    public function getPoidsGousse(): int
    {
        return $this->poidsGousse;
    }

    public static function getPoidsMoyen(): int
    {
        return self::PoidsMoyen;
    }



}