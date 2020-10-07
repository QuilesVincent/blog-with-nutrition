<?php


namespace App\Application\Entity\Sport;


class HealthGoal extends Goal
{
    public function __construct(string $time)
    {
        parent::__construct($time);
        $this->name = "Objectif santé";
    }

}