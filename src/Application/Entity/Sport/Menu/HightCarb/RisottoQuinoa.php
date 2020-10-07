<?php


namespace App\Application\Entity\Sport\Menu\HightCarb;


use App\Application\Entity\Sport\Condiments\Basilic;
use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\Curry;
use App\Application\Entity\Sport\Condiments\CurryPaste;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Mustard;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\Paprika;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Fat\BlackOlive;
use App\Application\Entity\Sport\Fat\CashewNuts;
use App\Application\Entity\Sport\Fat\Cheese\Feta;
use App\Application\Entity\Sport\Fat\Cheese\GratedCheese;
use App\Application\Entity\Sport\Fat\Cheese\Mozzarella;
use App\Application\Entity\Sport\Fat\CocoMilk;
use App\Application\Entity\Sport\Fat\Nuts;
use App\Application\Entity\Sport\Fat\SoyCream;
use App\Application\Entity\Sport\Feculents\CoralLentils;
use App\Application\Entity\Sport\Feculents\GaletteWrap;
use App\Application\Entity\Sport\Feculents\OatBran;
use App\Application\Entity\Sport\Feculents\OatMeal;
use App\Application\Entity\Sport\Feculents\Potatoes;
use App\Application\Entity\Sport\Feculents\Quinoa;
use App\Application\Entity\Sport\Feculents\WholeSugar;
use App\Application\Entity\Sport\Fish\Salmon;
use App\Application\Entity\Sport\Legumes\Cucumber;
use App\Application\Entity\Sport\Legumes\Eggplant;
use App\Application\Entity\Sport\Legumes\Garlic;
use App\Application\Entity\Sport\Legumes\GreenSalad;
use App\Application\Entity\Sport\Legumes\Leek;
use App\Application\Entity\Sport\Legumes\Mushroom;
use App\Application\Entity\Sport\Legumes\Oignon;
use App\Application\Entity\Sport\Legumes\Pepper;
use App\Application\Entity\Sport\Legumes\RawCarrot;
use App\Application\Entity\Sport\Legumes\Tomato;
use App\Application\Entity\Sport\Legumes\Zucchini;
use App\Application\Entity\Sport\Meat\Other\Eggs;
use App\Application\Entity\Sport\Meat\Other\EggsWhites;
use App\Application\Entity\Sport\Meat\WhiteMeat\RawChickenFillet;
use App\Application\Entity\Sport\Oil\CocoOil;
use App\Application\Entity\Sport\Oil\OliveOil;
use App\Application\Entity\Sport\Sauce\SojaSauce;

class RisottoQuinoa extends HightCarbMenu
{

    private Quinoa $quinoa;

    private CoralLentils $coralLentils;

    private Potatoes $potatoes;

    private RawCarrot $rawCarrot;

    private CocoMilk $cocoMilk;

    private CashewNuts $cashewNuts;

    private Nuts $nuts;

    private Curry $curry;

    private CocoOil $cocoOil;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Risotto au quinoa";
        $this->pathLogo = "risottoQuinoa.jpg";
        $this->nameClass = "RisottoQuinoa";
        $this->diet = ["vegetarian"];
        $this->intolerance = ["nuts"];
        $this->setDefineNumberCaloriesTotalForMenuHightCarb();
        $this->quinoa = new Quinoa($this->totalCalories * 0.25);
        $this->coralLentils = new CoralLentils($this->totalCalories * 0.1);
        $this->potatoes = new Potatoes($this->totalCalories * 0.07);
        $this->rawCarrot = new RawCarrot($this->totalCalories * 0.1);
        $this->cocoMilk = new CocoMilk($this->totalCalories * 0.15);
        $this->cashewNuts = new CashewNuts($this->totalCalories * 0.1);
        $this->nuts = new Nuts($this->totalCalories * 0.15);
        $this->curry = new Curry(0.0001);
        $this->cocoOil = new CocoOil($this->totalCalories * 0.05);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->quinoa,
            $this->coralLentils,
            $this->potatoes,
            $this->rawCarrot,
            $this->cocoMilk,
            $this->cashewNuts,
            $this->nuts,
            $this->curry,
            $this->cocoOil
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