<?php


namespace App\Application\Entity\Sport;


abstract class AbstractExercice
{
    protected string $name;

    protected array $partOfTheBodyUsed;

    protected int $level;

    protected bool $neededMateriel;

    protected ?array $materielUsed = null;

    protected ?int $numberOfReps = null;

    protected ?int $numberTime = null;

    protected int $breakTime;

    protected string $instructions;

    protected string $easierOptions;

    protected string $morediffcultOptions;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @return int|null
     */
    public function getNumberOfReps(): ?int
    {
        return $this->numberOfReps;
    }

    /**
     * @param int|null $numberOfReps
     */
    public function setNumberOfReps(?int $numberOfReps): void
    {
        $this->numberOfReps = $numberOfReps;
    }

    /**
     * @param int $breakTime
     */
    public function setBreakTime(int $breakTime): void
    {
        $this->breakTime = $breakTime;
    }

    /**
     * @return int|null
     */
    public function getNumberTime(): ?int
    {
        return $this->numberTime;
    }

    /**
     * @param int|null $numberTime
     */
    public function setNumberTime(?int $numberTime): void
    {
        $this->numberTime = $numberTime;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }





}