<?php


namespace App\Application\Entity\Sport;


use App\Application\Entity\Human;

class HumanWeightLossGoal extends Human
{

    public function setTotalCaloriesNeeded(): void
    {
        $this->totalCaloriesNeeded = $this->getCaloricMaintenance() * 0.7;
    }

    public function setTotalCaloriesNeededEvolution($pourcentageReduction): void
    {
        $this->totalCaloriesNeeded = $this->totalCaloriesNeeded * $pourcentageReduction;
    }

}