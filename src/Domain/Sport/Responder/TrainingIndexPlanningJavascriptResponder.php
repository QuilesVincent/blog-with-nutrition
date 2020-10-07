<?php


namespace App\Domain\Sport\Responder;



use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio1;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio2;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio1 as SportsProgramCardio1Intermediate;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio2 as SportsProgramCardio2Intermediate;

class TrainingIndexPlanningJavascriptResponder
{

    private object $human;

    private array $programs;

    public function __construct(object $human){

        $this->human = $human;
    }

    /**
     * @return object
     */
    public function getHuman(): object
    {
        return $this->human;
    }


    /**
     * @param SportsProgramCardio1 $sportsProgramCardio1
     * @param SportsProgramCardio2 $sportsProgramCardio2
     * @param SportsProgramCardio1Intermediate $sportsProgramCardio1Intermediate
     * @param SportsProgramCardio2Intermediate $sportsProgramCardio2Intermediate
     * @return array
     */
    public function getPrograms(SportsProgramCardio1 $sportsProgramCardio1, 
                                SportsProgramCardio2 $sportsProgramCardio2,
                                SportsProgramCardio1Intermediate $sportsProgramCardio1Intermediate,
                                SportsProgramCardio2Intermediate $sportsProgramCardio2Intermediate): array
    {
        switch ($this->human->getSportInThePast()) {
            case 0:
                $this->programs[] = $sportsProgramCardio1;
                $this->programs[] = $sportsProgramCardio2;
                break;
            case 1:
                $this->programs[] = $sportsProgramCardio1;
                $this->programs[] = $sportsProgramCardio2;
                break;
            case 2:
                $this->programs[] = $sportsProgramCardio1;
                $this->programs[] = $sportsProgramCardio2;
                break;
            case 3:
                $this->programs[] = $sportsProgramCardio1Intermediate;
                $this->programs[] = $sportsProgramCardio2Intermediate;
                break;
        }

        return $this->programs;
    }

}