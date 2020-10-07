<?php


namespace App\Domain\Sport\Responder;


use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio1;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio2;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio1 as SportsProgramCardio1Intermediate;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio2 as SportsProgramCardio2Intermediate;

class PlanningAfficherResponder
{

    private object $human;

    private array $allRecettes;

    private array $allPrograms;

    public function __construct(object $human,
                                SportsProgramCardio1 $sportsProgramCardio1,
                                SportsProgramCardio2 $sportsProgramCardio2,
                                SportsProgramCardio1Intermediate $sportsProgramCardio1Intermediate,
                                SportsProgramCardio2Intermediate $sportsProgramCardio2Intermediate)
    {

        $menuIndex = new MenuIndexResponder($human);
        $trainingIndex = new TrainingIndexResponder($human);
        $this->human = $human;

        $this->allRecettes = [$menuIndex->getAllRecettesBreakfast(), $menuIndex->getAllRecettesLowCarb(), $menuIndex->getAllRecetteHightCarb(), $menuIndex->getAllRecetteSnack()];
        $this->allPrograms = $trainingIndex->getPrograms(
            $sportsProgramCardio1,
            $sportsProgramCardio2,
            $sportsProgramCardio1Intermediate,
            $sportsProgramCardio2Intermediate
        );
    }

    /**
     * @return object
     */
    public function getHuman(): object
    {
        return $this->human;
    }

    /**
     * @return array
     */
    public function getAllRecettes(): array
    {
        return $this->allRecettes;
    }

    /**
     * @return array
     */
    public function getAllPrograms(): array
    {
        return $this->allPrograms;
    }






}