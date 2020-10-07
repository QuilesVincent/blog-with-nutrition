<?php


namespace App\Application\Entity\Sport;


class GoalResumptionOfSport extends Goal
{
    public function __construct(string $time)
    {
        parent::__construct($time);
        $this->name = "Objectif reprise du sport";
    }

}