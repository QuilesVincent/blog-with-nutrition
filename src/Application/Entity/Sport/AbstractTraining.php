<?php


namespace App\Application\Entity\Sport;


use Doctrine\Common\Collections\Collection;

abstract class AbstractTraining
{

    protected string $type;

    protected bool $neededMateriel;

    protected int $time;

    protected int $numberOfCircuit;

    protected array $circuits;

    protected int $numberOfExercices;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return bool
     */
    public function isNeededMateriel(): bool
    {
        return $this->neededMateriel;
    }

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * @return int
     */
    public function getNumberOfCircuit(): int
    {
        return $this->numberOfCircuit;
    }

    /**
     * @return array
     */
    public function getCircuits(): array
    {
        return $this->circuits;
    }

    /**
     * @return int
     */
    public function getNumberOfExercices(): int
    {
        return $this->numberOfExercices;
    }



}