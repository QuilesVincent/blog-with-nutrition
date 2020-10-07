<?php


namespace App\Application\Entity\Sport\Circuits;


use App\Application\Entity\Sport\AbstractCircuit;
use App\Application\Entity\Sport\Exercices\Abs\ThePlank;
use App\Application\Entity\Sport\Exercices\LowerBody\Squat;
use App\Application\Entity\Sport\Exercices\UpperBody\Pushups;

class WarmUpCircuit extends AbstractCircuit
{

    private Squat $squat;

    private ThePlank $thePlank;

    private Pushups $pushups;

    public function __construct()
    {

        $this->squat = new Squat();

        $this->thePlank = new ThePlank();

        $this->pushUps = new Pushups();

        $this->level = 1;

        $this->neededMateriel = false;

        $this->breakBeetweenLaps = true;

        $this->breakBeetweenExercices = false;

        $this->breakTimeBeetweenLaps = 45;

        $this->numberOfExercices = 3;

        $this->numberLaps = 3;

        $this->squat->setNumberOfReps(15);
        $this->thePlank->setNumberTime(30);
        $this->pushUps->setNumberOfReps(10);

        $this->exercices = [$this->squat, $this->thePlank, $this->pushUps];
    }

}