<?php


namespace App\Application\Entity\Sport\Menu\HightCarb;


use App\Application\Entity\Sport\Menu;

class HightCarbMenu extends Menu
{

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->type = "HightCarb";
    }

    public function setDefineNumberCaloriesTotalForMenuHightCarb()
    {
        if ($this->human->getTotalCaloriesNeeded() < 1800) {
            $totalCaloriesMenu = $this->human->getTotalCaloriesNeeded() * 0.35;
        } elseif ($this->human->getTotalCaloriesNeeded() < 2200 && $this->human->getTotalCaloriesNeeded() > 1800) {
            $totalCaloriesMenu = $this->human->getTotalCaloriesNeeded() * 0.35;
        } else {
            $totalCaloriesMenu = $this->human->getTotalCaloriesNeeded() * 0.35;
        }
        $this->setTotalCalories($totalCaloriesMenu);

    }

}