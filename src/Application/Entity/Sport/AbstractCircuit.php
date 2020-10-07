<?php


namespace App\Application\Entity\Sport;


class AbstractCircuit
{
    protected int $level;

    protected string $name;

    protected string $time;

    protected string $type;

    protected string $typeTraining;

    protected int $intensity;

    protected bool $neededMateriel;

    protected ?array $materielUsed = null;

    protected bool $breakBeetweenLaps;

    protected bool $breakBeetweenExercices;

    protected int $breakTimeBeetweenLaps;

    protected int $breakTimeBeetweenExercices;

    protected int $numberOfExercices;

    protected array $exercices;

    protected int $numberLaps;

    protected string $pathVideo;

    protected array $explication;

    protected string $pathPDF;

    protected string $pathPodcast;

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
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @return string
     */
    public function getTime(): string
    {
        return $this->time;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getTypeTraining(): string
    {
        return $this->typeTraining;
    }





    /**
     * @return int
     */
    public function getIntensity(): int
    {
        return $this->intensity;
    }



    /**
     * @return bool
     */
    public function isNeededMateriel(): bool
    {
        return $this->neededMateriel;
    }

    /**
     * @return array|null
     */
    public function getMaterielUsed(): ?array
    {
        return $this->materielUsed;
    }

    /**
     * @return bool
     */
    public function isBreakBeetweenLaps(): bool
    {
        return $this->breakBeetweenLaps;
    }

    /**
     * @return bool
     */
    public function isBreakBeetweenExercices(): bool
    {
        return $this->breakBeetweenExercices;
    }

    /**
     * @return int
     */
    public function getBreakTimeBeetweenLaps(): int
    {
        return $this->breakTimeBeetweenLaps;
    }

    /**
     * @return int
     */
    public function getBreakTimeBeetweenExercices(): int
    {
        return $this->breakTimeBeetweenExercices;
    }

    /**
     * @return int
     */
    public function getNumberOfExercices(): int
    {
        return $this->numberOfExercices;
    }

    /**
     * @return int
     */
    public function getNumberLaps(): int
    {
        return $this->numberLaps;
    }

    /**
     * @return array
     */
    public function getExercices(): array
    {
        return $this->exercices;
    }

    /**
     * @return string
     */
    public function getPathVideo(): string
    {
        return $this->pathVideo;
    }

    /**
     * @return array
     */
    public function getExplication(): array
    {
        return $this->explication;
    }

    /**
     * @param array $exercices
     */
    public function setExercices(array $exercices): void
    {
        $this->exercices = $exercices;
    }


    /**
     * @return string
     */
    public function getPathPDF(): string
    {
        return $this->pathPDF;
    }

    /**
     * @return string
     */
    public function getPathPodcast(): string
    {
        return $this->pathPodcast;
    }


}