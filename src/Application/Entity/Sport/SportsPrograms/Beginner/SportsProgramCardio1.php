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

class SportsProgramCardio1 extends SportProgram
{
    public function __construct(BeginnerCircuitOne $beginnerCircuitOne,
                                BeginnerCircuitTwo $beginnerCircuitTwo,
                                BeginnerCircuitThree $beginnerCircuitThree,
                                BeginnerCircuitFour $beginnerCircuitFour,
                                BeginnerCircuitFive $beginnerCircuitFive,
                                BeginnerCircuitSix $beginnerCircuitSix,
                                BeginnerCircuitSeven $beginnerCircuitSeven,
                                BeginnerCircuitHeight $beginnerCircuitHeight,
                                BeginnerCircuitNine $beginnerCircuitNine,
                                BeginnerCircuitTen $beginnerCircuitTen)
    {
        $this->type = "cardio";
        $this->levelIntensity = 1;
        $this->numberOfTraining = 3;
        $this->neededMateriel = false;
        $this->training = [
            $beginnerCircuitOne,
            $beginnerCircuitTwo,
            $beginnerCircuitThree,
            $beginnerCircuitFour,
            $beginnerCircuitFive,
            $beginnerCircuitSix,
            $beginnerCircuitSeven,
            $beginnerCircuitHeight,
            $beginnerCircuitNine,
            $beginnerCircuitTen
        ];
    }

}