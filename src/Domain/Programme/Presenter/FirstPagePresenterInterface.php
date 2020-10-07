<?php


namespace App\Domain\Programme\Presenter;


use App\Application\Entity\Sport\Circuits\BeginnerCircuitOne;
use App\Application\Entity\Sport\Circuits\BeginnerCircuitTwo;
use App\Application\Entity\Sport\Circuits\WarmUpCircuit;
use App\Application\Entity\Sport\Training\BeginnerCardioTraining;
use Symfony\Component\HttpFoundation\Response;

interface FirstPagePresenterInterface
{

    public function present(BeginnerCardioTraining $beginnerCardioTraining): Response;

}