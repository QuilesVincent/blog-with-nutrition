<?php


namespace App\Application\Entity\Sport\Exercices\LowerBody;


use App\Application\Entity\Sport\AbstractExercice;

class SideElevationOfTheLyingLeg extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Elévation latérale de la jambe couché";
        $this->partOfTheBodyUsed = [
            "principale" => "Fessiers"
        ];
        $this->level = 2;
        $this->neededMateriel = false;
        $this->instructions = "A définir";
    }

}