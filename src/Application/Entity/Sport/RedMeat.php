<?php


namespace App\Application\Entity\Sport;


class RedMeat extends Aliment
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->note = 4;
    }

}