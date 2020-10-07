<?php


namespace App\Application\Entity\Sport;


use Doctrine\Common\Collections\Collection;


/**
 * Class SportsProgram
 * @package App\Application\Entity\Sport
 */
class SportProgram
{

    /**
     * @var string
     */
    protected string $type;

    /**
     * @var int
     */
    protected int $numberOfTraining;

    /**
     * @var array
     */
    protected array $training;

    /**
     * @var int
     */
    protected int $levelIntensity;

    /**
     * @var bool
     */
    protected bool $neededMateriel;

    /**
     * @var array|null
     */
    protected ?array $materielUsed = null;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getNumberOfTraining(): int
    {
        return $this->numberOfTraining;
    }

    /**
     * @return array
     */
    public function getTraining(): array
    {
        return $this->training;
    }

    /**
     * @return int
     */
    public function getLevelIntensity(): int
    {
        return $this->levelIntensity;
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

}