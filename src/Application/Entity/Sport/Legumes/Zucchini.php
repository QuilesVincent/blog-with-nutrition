<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

/**
 * Class Zucchini
 * @package App\Application\Entity\Sport\Legumes
 */
class Zucchini extends Legumes
{

    const PoidsMoyen = 250;

    /**
     * Zucchini constructor.
     * @param int $quantity
     */
    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Courgettes crues";
        $this->calories = 0.17;
        $this->fat = 0.003;
        $this->carbohydrate = 0.031;
        $this->proteines = 0.012;
    }


    /**
     * @return int
     */
    public static function getPoidsMoyen(): int
    {
        return self::PoidsMoyen;
    }

}