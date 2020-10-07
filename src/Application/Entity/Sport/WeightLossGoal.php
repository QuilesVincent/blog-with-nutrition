<?php


namespace App\Application\Entity\Sport;


class WeightLossGoal extends Goal
{

    public function __construct(string $timeToReachTheGoal)
    {
        parent::__construct($timeToReachTheGoal);
        $this->name = "Objectif perte de poids";
    }

}