<?php


namespace App\Application\Entity\Sport\Exercices\LowerBody;


use App\Application\Entity\Sport\AbstractExercice;

class HipExtensionBentKnees extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Extension de la hanche genoux plié";
        $this->partOfTheBodyUsed = [
            "principale" => "Fessiers"
        ];
        $this->level = 2;
        $this->neededMateriel = false;
        $this->instructions = "A définir";
    }

}