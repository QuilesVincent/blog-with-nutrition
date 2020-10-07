<?php


namespace App\Application\Entity\Sport\Training;


class BegginerCardioTrainingRepresentation
{

    /**
     * @var BeginnerCardioTraining
     */
    private BeginnerCardioTraining $beginnerCardioTraining;

    public function __construct(BeginnerCardioTraining $beginnerCardioTraining)
    {
        $this->beginnerCardioTraining = $beginnerCardioTraining;

    }

    /**
     * @return BeginnerCardioTraining
     */
    public function getBeginnerCardioTraining(): BeginnerCardioTraining
    {
        return $this->beginnerCardioTraining;
    }



}