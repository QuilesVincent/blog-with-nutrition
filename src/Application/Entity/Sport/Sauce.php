<?php


namespace App\Application\Entity\Sport;


class Sauce extends Aliment
{

    public function __construct(int $quantityCalories)
    {
        parent::__construct($quantityCalories);
        $this->note = 1;
    }

}