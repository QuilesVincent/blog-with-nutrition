<?php


namespace App\Application\Entity\Sport\Circuits\Beginner;


use App\Application\Entity\Sport\AbstractCircuit;
use App\Application\Entity\Sport\Circuits\CircuitInterface;
use App\Application\Entity\Sport\Exercices\Abs\Candle;
use App\Application\Entity\Sport\Exercices\Cardio\MountainClimber;
use App\Application\Entity\Sport\Exercices\LowerBody\Slots;
use App\Application\Entity\Sport\Exercices\UpperBody\Pushups;

class BeginnerCircuitTwo extends AbstractCircuit implements CircuitInterface
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

        $this->setExplicationTexte();

    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setExplicationTexte(): void
    {
        $this->explication = [
            "Chaque exercice doit être éxécuté pendant 30 secondes, le plus intensément possible",
            "Récupérer 30 secondes entre chaque exercice",
            "Réaliser 5 tours",
            "Si les 2 premiers sont tours sont terminés facilement, augmenter le temps d'exercice à 40 secondes et réduire le temps de repos à 20 secondes",
            "Retour au calme après la séance de 5 à 10 minutes, comme une petite marche ou légers étirements",
            "Exercices du circuit :",
            "    - Mountain Climber",
            "    - Fentes alternéees",
            "    - Pompes",
            "    - Squat + décalage gauche droite rapide and touch",
            "    - Montée de genoux",
        ];
    }
}