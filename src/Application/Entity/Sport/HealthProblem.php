<?php


namespace App\Application\Entity\Sport;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class HealthProblem
 * @package App\Application\Entity\Nutrition
 */
class HealthProblem
{

    protected string $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}