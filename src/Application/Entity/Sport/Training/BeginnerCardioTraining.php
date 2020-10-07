<?php


namespace App\Application\Entity\Sport\Training;


use App\Application\Entity\Sport\AbstractTraining;
use App\Application\Entity\Sport\Circuits\Beginner\BeginnerCircuitOne;
use App\Application\Entity\Sport\Circuits\Beginner\BeginnerCircuitTwo;
use App\Application\Entity\Sport\Circuits\WarmUpCircuit;

class BeginnerCardioTraining extends AbstractTraining
{
    public function __construct(WarmUpCircuit $warmUpCircuit,
                                BeginnerCircuitOne $beginnerCircuitOne,
                                BeginnerCircuitTwo $beginnerCircuitTwo)
    {
        $this->type = "Cardio niveau débutant";

        $this->neededMateriel = false;

        $this->time = 30;

        $this->numberOfCircuit = 3;

        $this->circuits = [$warmUpCircuit, $beginnerCircuitOne, $beginnerCircuitTwo];

        $this->numberOfExercices = 11;


    }

}