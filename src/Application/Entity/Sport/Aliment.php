<?php


namespace App\Application\Entity\Sport;


abstract class Aliment
{

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var float
     */
    protected float $carbohydrate;

    /**
     * @var float
     */
    protected float $fat;

    /**
     * @var float
     */
    protected float $proteines;

    /**
     * @var float
     */
    protected float $quantityCalories;


    /**
     * @var int
     */
    protected int $quantityNeeded;

    /**
     * @var float
     */
    protected float $calories;

    /**
     * @var float
     */
    protected float $totalProteines;

    /**
     * @var float
     */
    protected float $totalFat;

    /**
     * @var float
     */
    protected float $totalCarbohydrate;

    /**
     * @var int
     */
    protected int $totalCalories;

    /**
     * @var int
     */
    protected int $note;


    public function __construct(int $quantityCalories)
    {
        $this->quantityCalories = $quantityCalories;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @return float
     */
    public function getCarbohydrate(): float
    {
        return $this->carbohydrate;
    }


    /**
     * @return float
     */
    public function getFat(): float
    {
        return $this->fat;
    }

    /**
     * @return float
     */
    public function getProteines(): float
    {
        return $this->proteines;
    }

    /**
     * @return float
     */
    public function getTotalProteines(): float
    {
        return $this->totalProteines;
    }

    /**
     * @return float
     */
    public function getTotalFat(): float
    {
        return $this->totalFat;
    }

    /**
     * @return float
     */
    public function getTotalCarbohydrate(): float
    {
        return $this->totalCarbohydrate;
    }


    /**
     * @return float
     */
    public function getQuantityCalories(): float
    {
        return $this->quantityCalories;
    }


    public function setTotalProteinCalcul()
    {
        //A refaire
        $this->totalProteines = $this->quantityNeeded * $this->proteines;
    }


    public function setTotalFatCalcul()
    {
        //A refaire
        $this->totalFat = $this->quantityNeeded * $this->fat;
    }

    public function setTotalCarbohydrateCalcul()
    {
        $this->totalCarbohydrate = $this->quantityNeeded * $this->carbohydrate;
    }
    /**
     * @return float
     */
    public function getCaloriesTotalProteines(): float
    {
        return $this->getTotalProteines() * 4;
    }/**
     * @return float
     */
    public function getCaloriesTotalFat(): float
    {
        return $this->getTotalFat() * 9;
    }/**
     * @return float
     */
    public function getCaroliesTotalCarbohydrates(): float
    {
        return $this->getTotalCarbohydrate() * 4;
    }

    public function setTotalCaloriesCalcul()
    {
        $this->totalCalories = $this->quantityNeeded * $this->calories;
    }

    /**
     * @return int
     */
    public function getTotalCalories(): int
    {
        return $this->totalCalories;
    }



    /**
     * @return float
     */
    public function getCalories(): float
    {
        return $this->calories;
    }

    /**
     * @return int
     */
    public function getNote(): int
    {
        return $this->note;
    }

    /**
     * @return int
     */
    public function getQuantityNeeded(): int
    {
        return $this->quantityNeeded;
    }

    public function setQuantityNeeded()
    {
        $this->quantityNeeded = $this->quantityCalories/$this->calories;
    }



}