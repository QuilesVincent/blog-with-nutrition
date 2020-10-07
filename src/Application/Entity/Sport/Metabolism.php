<?php


namespace App\Application\Entity\Sport;


class Metabolism
{

    protected string $name;

    protected int $valeur;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getValeur(): int
    {
        return $this->valeur;
    }

    /**
     * @param int $valeur
     */
    public function setValeur(int $valeur): void
    {
        $this->valeur = $valeur;
    }



}