<?php


namespace App\Application\Entity\Sport\Menu\LowCarb;


use App\Application\Entity\Sport\Condiments\Basilic;
use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\Curry;
use App\Application\Entity\Sport\Condiments\CurryPaste;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Mustard;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\Paprika;
use App\Application\Entity\Sport\Condiments\ProvenceGrass;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Fat\Cheese\Feta;
use App\Application\Entity\Sport\Fat\Cheese\ParmigianoReggiano;
use App\Application\Entity\Sport\Fat\CocoMilk;
use App\Application\Entity\Sport\Fat\Nuts;
use App\Application\Entity\Sport\Fat\SoyCream;
use App\Application\Entity\Sport\Feculents\GaletteWrap;
use App\Application\Entity\Sport\Feculents\OatMeal;
use App\Application\Entity\Sport\Fish\Salmon;
use App\Application\Entity\Sport\Legumes\Broccoli;
use App\Application\Entity\Sport\Legumes\Cucumber;
use App\Application\Entity\Sport\Legumes\Garlic;
use App\Application\Entity\Sport\Legumes\GreenSalad;
use App\Application\Entity\Sport\Legumes\Mushroom;
use App\Application\Entity\Sport\Legumes\Oignon;
use App\Application\Entity\Sport\Legumes\Pepper;
use App\Application\Entity\Sport\Legumes\RawCarrot;
use App\Application\Entity\Sport\Legumes\Tomato;
use App\Application\Entity\Sport\Legumes\TomatoConfit;
use App\Application\Entity\Sport\Legumes\Zucchini;
use App\Application\Entity\Sport\Meat\Other\Eggs;
use App\Application\Entity\Sport\Meat\WhiteMeat\RawChickenFillet;
use App\Application\Entity\Sport\Oil\CocoOil;
use App\Application\Entity\Sport\Oil\OliveOil;
use App\Application\Entity\Sport\Sauce\SojaSauce;

class ChickenCreamBroccoli extends LowCarbMenu
{

    private RawChickenFillet $rawChickenFillet;

    private Mushroom $mushroom;

    private Broccoli $broccoli;

    private OliveOil $oliveOil;

    private SoyCream $soyCream;

    private TomatoConfit $tomatoConfit;

    private ParmigianoReggiano $parmigianoReggiano;

    private ProvenceGrass $provenceGrass;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Poulet à la crème et brocolis rôtis";
        $this->pathLogo = "chickenCreamBroccoli.jpg";
        $this->nameClass = "ChickenCreamBroccoli";
        $this->diet = ["normal"];
        $this->intolerance = ["soja"];
        $this->setDefineNumberCaloriesTotalForMenuLowCarb();
        $this->rawChickenFillet = new RawChickenFillet($this->totalCalories * 0.4);
        $this->mushroom = new Mushroom($this->totalCalories * 0.07);
        $this->broccoli = new Broccoli($this->totalCalories * 0.14);
        $this->oliveOil = new OliveOil($this->totalCalories * 0.08);
        $this->soyCream = new SoyCream($this->totalCalories * 0.15);
        $this->tomatoConfit = new TomatoConfit($this->totalCalories * 0.09);
        $this->parmigianoReggiano = new ParmigianoReggiano($this->totalCalories * 0.2);
        $this->provenceGrass = new ProvenceGrass(0.0001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->rawChickenFillet,
            $this->mushroom,
            $this->broccoli,
            $this->oliveOil,
            $this->soyCream,
            $this->tomatoConfit,
            $this->parmigianoReggiano,
            $this->provenceGrass
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