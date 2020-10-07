<?php


namespace App\Application\Entity\Sport\Menu\HightCarb;


use App\Application\Entity\Sport\Condiments\Basilic;
use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\Curry;
use App\Application\Entity\Sport\Condiments\Dill;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Mustard;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\Paprika;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Fat\Avocado;
use App\Application\Entity\Sport\Fat\Cheese\CreamCheese;
use App\Application\Entity\Sport\Fat\CocoMilk;
use App\Application\Entity\Sport\Fat\Nuts;
use App\Application\Entity\Sport\Fat\SoyCream;
use App\Application\Entity\Sport\Feculents\BagelSesame;
use App\Application\Entity\Sport\Feculents\GaletteWrap;
use App\Application\Entity\Sport\Fish\Salmon;
use App\Application\Entity\Sport\Fish\SmokedSalmon;
use App\Application\Entity\Sport\Legumes\Cucumber;
use App\Application\Entity\Sport\Legumes\Garlic;
use App\Application\Entity\Sport\Legumes\GreenSalad;
use App\Application\Entity\Sport\Legumes\Mushroom;
use App\Application\Entity\Sport\Legumes\Oignon;
use App\Application\Entity\Sport\Legumes\Pepper;
use App\Application\Entity\Sport\Legumes\RawCarrot;
use App\Application\Entity\Sport\Legumes\Shallot;
use App\Application\Entity\Sport\Legumes\Tomato;
use App\Application\Entity\Sport\Legumes\Zucchini;
use App\Application\Entity\Sport\Meat\Other\Eggs;
use App\Application\Entity\Sport\Meat\WhiteMeat\RawChickenFillet;
use App\Application\Entity\Sport\Oil\CocoOil;
use App\Application\Entity\Sport\Oil\OliveOil;
use App\Application\Entity\Sport\Sauce\SojaSauce;

class SalmonBagel extends HightCarbMenu
{

    private BagelSesame $bagelSesame;

    private SmokedSalmon $smokedSalmon;

    private SoyCream $soyCream;

    private Shallot $shallot;

    private GreenSalad $greenSalad;

    private Dill $dill;

    private Salt $salt;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Salmon Bagel";
        $this->pathLogo = "salmonBagel.jpg";
        $this->nameClass = "SalmonBagel";
        $this->diet = ["normal"];
        $this->intolerance = ["soja", "gluten", "sesame"];
        $this->setDefineNumberCaloriesTotalForMenuHightCarb();
        $this->bagelSesame = new BagelSesame($this->totalCalories * 0.4);
        $this->smokedSalmon = new SmokedSalmon($this->totalCalories * 0.26);
        $this->soyCream = new SoyCream($this->totalCalories * 0.12);
        $this->shallot = new Shallot($this->totalCalories * 0.03);
        $this->greenSalad = new GreenSalad($this->totalCalories * 0.01);
        $this->dill = new Dill(0.0001);
        $this->salt = new Salt(0.0001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->bagelSesame,
            $this->smokedSalmon,
            $this->soyCream,
            $this->shallot,
            $this->greenSalad,
            $this->dill,
            $this->salt
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