<?php


namespace App\Application\Entity\Sport\Menu\Breakfast;


use App\Application\Entity\Human;
use App\Application\Entity\Sport\Menu;

class BreakfastMenu extends Menu
{

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->type = "Breakfast";
        $this->nameClass = "AppleCompote";
    }

    public function setDefineNumberCaloriesTotalForBreakfast()
    {
        if ($this->human->getTotalCaloriesNeeded() < 1800) {
            $totalCaloriesMenu = $this->human->getTotalCaloriesNeeded() * 0.25;
        } elseif ($this->human->getTotalCaloriesNeeded() < 2200 && $this->human->getTotalCaloriesNeeded() > 1800) {
            $totalCaloriesMenu = $this->human->getTotalCaloriesNeeded() * 0.25;
        } else {
            $totalCaloriesMenu = $this->human->getTotalCaloriesNeeded() * 0.25;
        }
        $this->setTotalCalories($totalCaloriesMenu);

    }

}