<?php


namespace App\Application\Entity\Sport\WorkType;


use App\Application\Entity\Sport\AbstractWorkType;

class HardWorkType extends AbstractWorkType
{
    public function __construct()
    {
        $this->value = 1;
    }

}