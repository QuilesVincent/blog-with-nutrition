<?php


namespace App\Application\Entity\Sport\Menu\Snack;


use App\Application\Entity\Human;
use App\Application\Entity\Sport\Menu;

class SnackMenu extends  Menu
{

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->type = "Snack";
    }

    public function setDefineNumberCaloriesTotalForSnack()
    {
        if ($this->human->getTotalCaloriesNeeded() < 1800) {
            $totalCaloriesMenu = $this->human->getTotalCaloriesNeeded() * 0.10;
        } elseif ($this->human->getTotalCaloriesNeeded() < 2200 && $this->human->getTotalCaloriesNeeded() > 1800) {
            $totalCaloriesMenu = $this->human->getTotalCaloriesNeeded() * 0.10;
        } else {
            $totalCaloriesMenu = $this->human->getTotalCaloriesNeeded() * 0.10;
        }
        $this->setTotalCalories($totalCaloriesMenu);

    }

}