<?php


namespace App\Domain\Sport\Responder;


use App\Application\Entity\Sport\Menu\Breakfast\AppleCompote;
use App\Application\Entity\Sport\Menu\HightCarb\Birchermuesli;
use App\Application\Entity\Sport\Menu\HightCarb\BowlCake;
use App\Application\Entity\Sport\Menu\HightCarb\EggsLegs;
use App\Application\Entity\Sport\Menu\HightCarb\MilkAndRice;
use App\Application\Entity\Sport\Menu\HightCarb\MuesliVerrines;
use App\Application\Entity\Sport\Menu\HightCarb\OatBananaAndChocolat;
use App\Application\Entity\Sport\Menu\HightCarb\PorridgePomme;
use App\Application\Entity\Sport\Menu\HightCarb\RaisinBlinis;
use App\Application\Entity\Sport\Menu\HightCarb\SmoothieRedFruits;
use App\Application\Entity\Sport\Menu\WeekRecipe\FruityGranolaVerrines;

class PageProgrammeResponder
{

    private object $human;

    private string $programs;

    private string $menu;

    private object $weekRecipe;

    /**
     * PageProgrammeResponder constructor.
     * @param object $human
     * @param string $programs
     * @param string $menu
     */
    public function __construct(object $human, string $programs, string $menu)
    {
        $this->human = $human;
        $this->programs = $programs;
        $this->menu = $menu;
        $this->setWeekRecipe();
    }

    /**
     * @return object
     */
    public function getHuman(): object
    {
        return $this->human;
    }

    /**
     * @return string
     */
    public function getPrograms(): string
    {
        return $this->programs;
    }

    /**
     * @return array
     */
    public function getMenu(): array
    {
        $menuStr = $this->menu;
        $tableauMenuSplit = str_split($menuStr, ",");
        $arrayMenu = [];
        foreach($tableauMenuSplit as $menuSeul) {
            $menuObject = new $menuSeul();
            array_push($arrayMenu, $menuObject);
        }

        return $arrayMenu;
    }

    /**
     * @return object
     */
    public function getWeekRecipe(): object
    {
        return $this->weekRecipe;
    }


    /**
     * Define the new week recipe
     */
    public function setWeekRecipe(): void
    {
        $this->weekRecipe = new FruityGranolaVerrines($this->human);
    }










}