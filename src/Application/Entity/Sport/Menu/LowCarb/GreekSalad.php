<?php


namespace App\Application\Entity\Sport\Menu\LowCarb;


use App\Application\Entity\Sport\Fat\BlackOlive;
use App\Application\Entity\Sport\Fat\Cheese\Feta;
use App\Application\Entity\Sport\Legumes\Cucumber;
use App\Application\Entity\Sport\Legumes\Oignon;
use App\Application\Entity\Sport\Legumes\Pepper;
use App\Application\Entity\Sport\Legumes\Tomato;
use App\Application\Entity\Sport\Oil\OliveOil;

class GreekSalad extends LowCarbMenu
{

    private Tomato $tomato;

    private Cucumber $cucumber;

    private Pepper $pepper;

    private Oignon $oignon;

    private Feta $feta;

    private BlackOlive $blackOlive;

    private OliveOil $oliveOil;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Salade Greque";
        $this->pathLogo = "greekSalad.jpg";
        $this->nameClass = "GreekSalad";
        $this->diet = ["vegetarian"];
        $this->setDefineNumberCaloriesTotalForMenuLowCarb();
        $this->tomato = new Tomato($this->totalCalories * 0.07);
        $this->cucumber = new Cucumber($this->totalCalories * 0.05);
        $this->pepper = new Pepper($this->totalCalories * 0.1);
        $this->oignon = new Oignon($this->totalCalories * 0.05);
        $this->feta = new Feta($this->totalCalories * 0.55);
        $this->blackOlive = new BlackOlive($this->totalCalories * 0.08);
        $this->oliveOil = new OliveOil($this->totalCalories * 0.1);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->tomato,
            $this->cucumber,
            $this->pepper,
            $this->oignon,
            $this->feta,
            $this->blackOlive,
            $this->oliveOil
        ];
    }



    public function setExplication(): void
    {
        $this->explication = [
            'Faire chauffer le gaufrier.',
            'Dans un bol, mélanger tous les ingrédients, sans oublier l\'huile de coco, le stick de stevia, l\'arôme vanille, et la levure à la fin. Ajuster la quantité de lait d\'amande afin d\'obtenir la texture souhaitée (doit rester assez consistante).',
            'Huiler légèrement à l\'huile de coco le gaufrier afin d\'éviter aux gaufres de coller. Etaler la pâte uniformément sans trop en mettre afin de ne pas faire déborder à la cuisson',
            'Pour servir : ajouter les fraises et un filet de miel par dessus les gaufres (possibilité d\'ajouter du fromage blanc 3%)'
        ];
    }


}