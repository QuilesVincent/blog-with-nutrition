<?php


namespace App\Application\Entity\Sport\SportsPrograms\Beginner;


use App\Application\Entity\Sport\Circuits\Beginner\BeginnerCircuitFive;
use App\Application\Entity\Sport\Circuits\Beginner\BeginnerCircuitFour;
use App\Application\Entity\Sport\Circuits\Beginner\BeginnerCircuitHeight;
use App\Application\Entity\Sport\Circuits\Beginner\BeginnerCircuitNine;
use App\Application\Entity\Sport\Circuits\Beginner\BeginnerCircuitOne;
use App\Application\Entity\Sport\Circuits\Beginner\BeginnerCircuitSeven;
use App\Application\Entity\Sport\Circuits\Beginner\BeginnerCircuitSix;
use App\Application\Entity\Sport\Circuits\Beginner\BeginnerCircuitTen;
use App\Application\Entity\Sport\Circuits\Beginner\BeginnerCircuitThree;
use App\Application\Entity\Sport\Circuits\Beginner\BeginnerCircuitTwo;
use App\Application\Entity\Sport\SportProgram;

class SportsProgramCardio2Demo extends SportProgram
{
    public function __construct(BeginnerCircuitOne $beginnerCircuitOne,
                                BeginnerCircuitFive $beginnerCircuitFive,
                                BeginnerCircuitNine $beginnerCircuitNine)
    {
        $this->type = "cardio";
        $this->levelIntensity = 1;
        $this->numberOfTraining = 3;
        $this->neededMateriel = false;
        $this->training = [
            $beginnerCircuitOne,
            $beginnerCircuitFive,
            $beginnerCircuitNine
        ];
    }

}