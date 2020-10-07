<?php


namespace App\Domain\Sport\Responder;



use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio1Demo;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio2Demo;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio1Demo as SportsProgramCardio1Intermediate;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio2Demo as SportsProgramCardio2Intermediate;

class TrainingIndexDemoResponder
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
     * @param SportsProgramCardio1Demo $sportsProgramCardio1Demo
     * @param SportsProgramCardio2Demo $sportsProgramCardio2Demo
     * @param SportsProgramCardio1Intermediate $sportsProgramCardio1IntermediateDemo
     * @param SportsProgramCardio2Intermediate $sportsProgramCardio2IntermediateDemo
     * @return array
     */
    public function getPrograms(SportsProgramCardio1Demo $sportsProgramCardio1Demo,
                                SportsProgramCardio2Demo $sportsProgramCardio2Demo,
                                SportsProgramCardio1Intermediate $sportsProgramCardio1IntermediateDemo,
                                SportsProgramCardio2Intermediate $sportsProgramCardio2IntermediateDemo): array
    {
        switch ($this->human->getSportInThePast()) {
            case 0:
                $this->programs[] = $sportsProgramCardio1Demo;
                $this->programs[] = $sportsProgramCardio2Demo;
                break;
            case 1:
                $this->programs[] = $sportsProgramCardio1Demo;
                $this->programs[] = $sportsProgramCardio2Demo;
                break;
            case 2:
                $this->programs[] = $sportsProgramCardio1Demo;
                $this->programs[] = $sportsProgramCardio2Demo;
                break;
            case 3:
                $this->programs[] = $sportsProgramCardio1IntermediateDemo;
                $this->programs[] = $sportsProgramCardio2IntermediateDemo;
                break;
        }

        return $this->programs;
    }

}