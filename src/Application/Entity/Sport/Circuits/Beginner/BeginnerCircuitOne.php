<?php


namespace App\Application\Entity\Sport\Circuits\Beginner;


use App\Application\Entity\Sport\AbstractCircuit;
use App\Application\Entity\Sport\Circuits\CircuitInterface;
use App\Application\Entity\Sport\Exercices\Abs\ThePlank;
use App\Application\Entity\Sport\Exercices\Cardio\JumpingJack;
use App\Application\Entity\Sport\Exercices\Cardio\KneeRise;
use App\Application\Entity\Sport\Exercices\LowerBody\Squat;

class BeginnerCircuitOne extends AbstractCircuit implements CircuitInterface
{

    public function __construct()
    {

        $this->name = "BeginnerCircuitOne";

        $this->time = "27";

        $this->type = "cardio";

        $this->typeTraining = "CircuitTraining";

        $this->intensity = 3;

        $this->pathVideo = "video/videohack.mp4";

        $this->pathPDF = "pdf/circuit5";

        $this->pathPodcast = "podcast/circuit5";

        $this->exercices = ["Marches de l'ours", "Gainage", "Jumping Jack", "Burpees", "Jump Roller"];

        $this->setExplicationTexte();


    }


    public function setExplicationTexte(): void
    {
        $this->explication = [
            "Réaliser 5 tours",
            "Récupérer 30 secondes entre chaque exercice",
            "Chaque exercice doit être exécuté le plus intensément possible"
        ];
    }


}