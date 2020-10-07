<?php


namespace App\Application\Entity\Sport;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Goal
 * @package App\Application\Entity\Nutrition
 */
class Goal
{


    protected int $timeToReachTheGoal;

    protected string $name;

    public function __construct(int $timeToReachTheGoal)
    {
        $this->timeToReachTheGoal = $timeToReachTheGoal;
    }

    /**
     * @return int
     */
    public function getTimeToReachTheGoal(): int
    {
        return $this->timeToReachTheGoal;
    }



}