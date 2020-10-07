<?php


namespace App\Application\Entity\Sport\Exercices\UpperBody;


use App\Application\Entity\Sport\AbstractExercice;

class Pullups extends AbstractExercice
{

    public function __construct()
    {
        $this->name = "Tractions";
        $this->partOfTheBodyUsed = [
            "principale" => "Dos",
            "secondaire" => ["Biceps", "triceps"]
        ];
        $this->level = 5;
        $this->neededMateriel = true;

        $this->materielUsed = [
            "Option 1" => "barre de traction",
            "Option 2" => "2 chaises et un manche à balais"
            ];

        $this->instructions = "A définir";

        $this->easierOptions = "Faire l'option 2 avec les chaises et le manche à balais";
    }

}