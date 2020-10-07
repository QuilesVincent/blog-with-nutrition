<?php


namespace App\Application\Entity\Sport\Menu\HightCarb;


use App\Application\Entity\Sport\Condiments\Basilic;
use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\Curry;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Mustard;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\Paprika;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Fat\Avocado;
use App\Application\Entity\Sport\Fat\Cheese\CreamCheese;
use App\Application\Entity\Sport\Fat\CocoMilk;
use App\Application\Entity\Sport\Fat\Nuts;
use App\Application\Entity\Sport\Feculents\BagelSesame;
use App\Application\Entity\Sport\Feculents\GaletteWrap;
use App\Application\Entity\Sport\Fish\Salmon;
use App\Application\Entity\Sport\Legumes\Cucumber;
use App\Application\Entity\Sport\Legumes\Garlic;
use App\Application\Entity\Sport\Legumes\GreenSalad;
use App\Application\Entity\Sport\Legumes\Mushroom;
use App\Application\Entity\Sport\Legumes\Oignon;
use App\Application\Entity\Sport\Legumes\Pepper;
use App\Application\Entity\Sport\Legumes\RawCarrot;
use App\Application\Entity\Sport\Legumes\Tomato;
use App\Application\Entity\Sport\Legumes\Zucchini;
use App\Application\Entity\Sport\Meat\Other\Eggs;
use App\Application\Entity\Sport\Meat\WhiteMeat\RawChickenFillet;
use App\Application\Entity\Sport\Oil\CocoOil;
use App\Application\Entity\Sport\Oil\OliveOil;
use App\Application\Entity\Sport\Sauce\SojaSauce;

class GreenBagel extends HightCarbMenu
{

    private BagelSesame $bagelSesame;

    private Cucumber $cucumber;

    private Avocado $avocado;

    private GreenSalad $greenSalad;

    private LemonJuice $lemonJuice;

    private CreamCheese $creamCheese;

    private Oignon $oignon;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Green Bagel";
        $this->pathLogo = "greenBagel.jpg";
        $this->nameClass = "GreenBagel";
        $this->diet = ["vegetarian"];
        $this->intolerance = ["gluten"];
        $this->setDefineNumberCaloriesTotalForMenuHightCarb();
        $this->bagelSesame = new BagelSesame($this->totalCalories * 0.4);
        $this->cucumber = new Cucumber($this->totalCalories * 0.02);
        $this->avocado = new Avocado($this->totalCalories * 0.4);
        $this->greenSalad = new GreenSalad($this->totalCalories * 0.01);
        $this->lemonJuice = new LemonJuice(0.0001);
        $this->creamCheese = new CreamCheese($this->totalCalories * 0.3);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->bagelSesame,
            $this->cucumber,
            $this->avocado,
            $this->greenSalad,
            $this->lemonJuice,
            $this->creamCheese
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