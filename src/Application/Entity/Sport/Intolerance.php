<?php


namespace App\Application\Entity\Sport;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Intolerance
 * @package App\Application\Entity\Nutrition
 */
class Intolerance
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