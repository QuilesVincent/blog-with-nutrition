<?php


namespace App\Application\Entity\Sport\Fruits;


trait FruitEntier
{

    protected int $poidsFruitMoyen;

    /**
     * @return int
     */
    public function getPoidsFruitMoyen(): int
    {
        return $this->poidsFruitMoyen;
    }



}