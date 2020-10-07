<?php


namespace App\Application\Entity\Sport\Menu\HightCarb;


use App\Application\Entity\Sport\Feculents\RawPasta;
use App\Application\Entity\Sport\Meat\RedMeat\RawRedMeat5;
use App\Application\Entity\Sport\Condiments\PepperCondiment;
use App\Application\Entity\Sport\Condiments\RedChiliPowder;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Condiments\Thym;
use App\Application\Entity\Sport\Legumes\Garlic;
use App\Application\Entity\Sport\Legumes\Oignon;
use App\Application\Entity\Sport\Legumes\Spinach;
use App\Application\Entity\Sport\Legumes\Tomato;
use App\Application\Entity\Sport\Legumes\TomatoCoulis;
use App\Application\Entity\Sport\Oil\CocoOil;

class PastaBolognese extends HightCarbMenu
{

    private RawRedMeat5 $rawRedMeat5;

    private Spinach $spinach;

    private Tomato $tomato;

    private TomatoCoulis $tomatoCoulis;

    private RawPasta $rawPasta;

    private Oignon $oignon;

    private CocoOil $cocoOil;

    private Garlic $garlic;

    private Thym $thym;

    private Salt $salt;

    private PepperCondiment $pepperCondiment;

    private RedChiliPowder $redChiliPowder;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Pâtes à la bolognaise healthy (Max 2 fois par semaine)";
        $this->pathLogo = "pastaBolognese.jpg";
        $this->nameClass = "PastaBolognese";
        $this->diet = ["normal", "redMeat"];
        $this->intolerance = ["gluten"];
        $this->setDefineNumberCaloriesTotalForMenuHightCarb();
        $this->rawRedMeat5 = new RawRedMeat5($this->totalCalories * 0.3);
        $this->spinach = new Spinach($this->totalCalories * 0.1);
        $this->tomato = new Tomato($this->totalCalories * 0.03);
        $this->tomatoCoulis = new TomatoCoulis($this->totalCalories * 0.02);
        $this->rawPasta = new RawPasta($this->totalCalories * 0.35);
        $this->oignon = new Oignon($this->totalCalories * 0.03);
        $this->cocoOil = new CocoOil($this->totalCalories * 0.06);
        $this->garlic = new Garlic($this->totalCalories * 0.02);
        $this->thym = new Thym(0.0000001);
        $this->salt = new Salt(0.0000001);
        $this->pepperCondiment = new PepperCondiment(0.0000001);
        $this->redChiliPowder = new RedChiliPowder(0.0000001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->rawRedMeat5,
            $this->spinach,
            $this->tomato,
            $this->tomatoCoulis,
            $this->rawPasta,
            $this->oignon,
            $this->cocoOil,
            $this->garlic,
            $this->thym,
            $this->salt,
            $this->pepperCondiment,
            $this->redChiliPowder
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