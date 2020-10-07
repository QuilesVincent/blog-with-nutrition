<?php


namespace App\Application\Entity\Sport\Menu\Snack;


use App\Application\Entity\Sport\Fruits\FruitsRouges\Bluebbery;
use App\Application\Entity\Sport\Feculents\GranolaMix;
use App\Application\Entity\Sport\Fruits\Banane;
use App\Application\Entity\Sport\Fruits\Physalis;
use App\Application\Entity\Sport\Milk\AlmondMilk;
use App\Application\Entity\Sport\Seeds\ChiaSeed;

class ChiaPudding extends SnackMenu
{

    private ChiaSeed $chiaSeed;

    private AlmondMilk $almondMilk;

    private Banane $banane;

    private Bluebbery $bluebbery;

    private Physalis $physalis;

    private GranolaMix $granolaMix;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Chia Pudding super antioxydant";
        $this->pathLogo = "chiaPudding.jpg";
        $this->nameClass = "ChiaPudding";
        $this->diet = ["vegetarian", "normal"];
        $this->intolerance = ["nuts"];
        $this->setDefineNumberCaloriesTotalForSnack();
        $this->chiaSeed = new ChiaSeed($this->totalCalories * 0.3);
        $this->almondMilk = new AlmondMilk($this->totalCalories * 0.1);
        $this->banane = new Banane($this->totalCalories * 0.25);
        $this->bluebbery = new Bluebbery($this->totalCalories * 0.1);
        $this->physalis = new Physalis($this->totalCalories * 0.1);
        $this->granolaMix = new GranolaMix($this->totalCalories * 0.25);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->chiaSeed,
            $this->almondMilk,
            $this->banane,
            $this->bluebbery,
            $this->physalis,
            $this->granolaMix
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