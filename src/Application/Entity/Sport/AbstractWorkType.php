<?php


namespace App\Application\Entity\Sport;


/**
 * Class AbstractWorkType
 * @package App\Application\Entity\Nutrition
 */
class AbstractWorkType
{

    protected int $value;

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }



}