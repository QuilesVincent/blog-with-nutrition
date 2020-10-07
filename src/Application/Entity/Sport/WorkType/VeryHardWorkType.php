<?php


namespace App\Application\Entity\Sport\WorkType;


use App\Application\Entity\Sport\AbstractWorkType;

class VeryHardWorkType extends AbstractWorkType
{
    public function __construct()
    {
        $this->value = 2;
    }

}