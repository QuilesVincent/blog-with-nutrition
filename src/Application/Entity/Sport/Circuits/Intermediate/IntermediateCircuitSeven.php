<?php


namespace App\Application\Entity\Sport\Circuits\Intermediate;


use App\Application\Entity\Sport\AbstractCircuit;
use App\Application\Entity\Sport\Exercices\Abs\MilitaryCladding;
use App\Application\Entity\Sport\Exercices\Cardio\JumpingJack;
use App\Application\Entity\Sport\Exercices\Cardio\JumpSquat;
use App\Application\Entity\Sport\Exercices\UpperBody\Pushups;

class IntermediateCircuitSeven extends AbstractCircuit
{



    public function __construct()
    {
        $this->name = "circuit1";

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
            "    - Fentes dynamiques avec montée de genoux (15 sec par jambe)",
            "    - Pompes",
            "    - Burpees",
            "    - Course aller retour sur 30 mètres + touché au sol avec demi tour",
            "    - Gainage Militaire",
        ];
    }
}