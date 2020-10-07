<?php


namespace App\Application\Entity\Sport\Circuits\Intermediate;


use App\Application\Entity\Sport\AbstractCircuit;
use App\Application\Entity\Sport\Exercices\Abs\Candle;
use App\Application\Entity\Sport\Exercices\Abs\ThePlank;
use App\Application\Entity\Sport\Exercices\Cardio\JumpSquat;
use App\Application\Entity\Sport\Exercices\UpperBody\Pushups;

class IntermediateCircuitThree extends AbstractCircuit
{



    public function __construct()
    {
        $this->name = "circuit 3 cycle 2";

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
            "    - Montée de genoux",
            "    - Relevé de bassin 1 jambes explosif (15 secondes par jambes)",
            "    - Jump Squat",
            "    - Crunch Cheville",
            "    - Gainage militaire",
        ];
    }

}