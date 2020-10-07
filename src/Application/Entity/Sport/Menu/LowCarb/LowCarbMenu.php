<?php


namespace App\Application\Entity\Sport\Menu\LowCarb;


use App\Application\Entity\Human;
use App\Application\Entity\Sport\Menu;

class LowCarbMenu extends  Menu
{

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->type = "LowCarb";
    }

    public function setDefineNumberCaloriesTotalForMenuLowCarb()
    {
        if ($this->human->getTotalCaloriesNeeded() < 1800) {
            $totalCaloriesMenu = $this->human->getTotalCaloriesNeeded() * 0.20;
        } elseif ($this->human->getTotalCaloriesNeeded() < 2200 && $this->human->getTotalCaloriesNeeded() > 1800) {
            $totalCaloriesMenu = $this->human->getTotalCaloriesNeeded() * 0.20;
        } else {
            $totalCaloriesMenu = $this->human->getTotalCaloriesNeeded() * 0.20;
        }
        $this->setTotalCalories($totalCaloriesMenu);

    }

}