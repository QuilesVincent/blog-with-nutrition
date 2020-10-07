<?php


namespace App\Application\Entity\Sport;


use App\Application\Entity\Human;
use Doctrine\Common\Collections\Collection;

/**
 * Class Menu
 * @package App\Application\Entity\Sport
 */
class Menu
{

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var int
     */
    protected int $totalCalories;

    /**
     * @var int
     */
    protected int $totalFat;

    /**
     * @var int
     */
    protected int $totalCarbohydrates;

    /**
     * @var int
     */
    protected int $totalProteins;

    /**
     * @var array
     */
    protected array $aliments;

    /**
     * @var object
     */
    protected object $human;

    /**
     * @var string
     */
    protected string $type;

    protected array $diet;

    protected array $intolerance;

    /**
     * @var string
     */
    protected string $pathLogo;

    protected string $nameClass;

    protected array $arrayAllAlim;

    protected int $totalCaloriesAliments;

    protected array $explication;

    /**
     * Menu constructor.
     * @param object $human
     */
    public function __construct(object $human)
    {
        $this->human = $human;
    }

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
    public function getTotalCalories(): int
    {
        return $this->totalCalories;
    }

    /**
     * @param int $totalCalories
     */
    public function setTotalCalories(int $totalCalories): void
    {
        $this->totalCalories = $totalCalories;
    }

    /**
     * @return int
     */
    public function getTotalFat(): int
    {
        return $this->totalFat;
    }

    /**
     * @param int $totalFat
     */
    public function setTotalFat(int $totalFat): void
    {
        $this->totalFat = $totalFat;
    }

    /**
     * @return int
     */
    public function getTotalCarbohydrates(): int
    {
        return $this->totalCarbohydrates;
    }

    /**
     * @param int $totalCarbohydrates
     */
    public function setTotalCarbohydrates(int $totalCarbohydrates): void
    {
        $this->totalCarbohydrates = $totalCarbohydrates;
    }

    /**
     * @return int
     */
    public function getTotalProteins(): int
    {
        return $this->totalProteins;
    }

    /**
     * @param int $totalProteins
     */
    public function setTotalProteins(int $totalProteins): void
    {
        $this->totalProteins = $totalProteins;
    }

    /**
     * @return array
     */
    public function getAliments(): array
    {
        return $this->aliments;
    }

    /**
     * @param Aliment $aliment
     */
    public function setAliments($aliment): void
    {
        $this->aliments[] = $aliment;
    }

    /**
     * @return string
     */
    public function getPathLogo(): string
    {
        return $this->pathLogo;
    }

    /**
     * @return string
     */
    public function getNameClass(): string
    {
        return $this->nameClass;
    }

    public function  setQuantityAlim()
    {
        $totalFat = 0;
        $totalCarbo = 0;
        $totalProtein = 0;
        $totalCaloriesAliments = 0;
        for($i = 0; $i < count($this->arrayAllAlim); $i++) {
            $this->arrayAllAlim[$i]->setQuantityNeeded();
            $this->arrayAllAlim[$i]->setTotalCarbohydrateCalcul();
            $this->arrayAllAlim[$i]->setTotalProteinCalcul();
            $this->arrayAllAlim[$i]->setTotalFatCalcul();
            $this->arrayAllAlim[$i]->setTotalCaloriesCalcul();
            $totalFat += $this->arrayAllAlim[$i]->getTotalFat();
            $totalCarbo += $this->arrayAllAlim[$i]->getTotalCarbohydrate();
            $totalProtein += $this->arrayAllAlim[$i]->getTotalProteines();
            $totalCaloriesAliments += $this->arrayAllAlim[$i]->getTotalCalories();
        }
        $this->setTotalFat($totalFat);
        $this->setTotalCarbohydrates($totalCarbo);
        $this->setTotalProteins($totalProtein);
        $this->setTotalCaloriesAliments($totalCaloriesAliments);

    }

    /**
     * @return array
     */
    public function getArrayAllAlim(): array
    {
        return $this->arrayAllAlim;
    }

    /**
     * @return int
     */
    public function getTotalCaloriesAliments(): int
    {
        return $this->totalCaloriesAliments;
    }

    /**
     * @param int $totalCaloriesAliments
     */
    public function setTotalCaloriesAliments(int $totalCaloriesAliments): void
    {
        $this->totalCaloriesAliments = $totalCaloriesAliments;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return array
     */
    public function getDiet(): array
    {
        return $this->diet;
    }



    /**
     * @return array
     */
    public function getIntolerance(): array
    {
        return $this->intolerance;
    }



    /**
     * @return array
     */
    public function getExplication(): array
    {
        return $this->explication;
    }


















}