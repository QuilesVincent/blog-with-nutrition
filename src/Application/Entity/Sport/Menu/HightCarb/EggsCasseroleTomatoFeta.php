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
use App\Application\Entity\Sport\Fat\Cheese\Feta;
use App\Application\Entity\Sport\Fat\CocoMilk;
use App\Application\Entity\Sport\Fat\Hazelnut;
use App\Application\Entity\Sport\Fat\Nuts;
use App\Application\Entity\Sport\Fat\SoyCream;
use App\Application\Entity\Sport\Feculents\GaletteWrap;
use App\Application\Entity\Sport\Feculents\OatMeal;
use App\Application\Entity\Sport\Fish\Salmon;
use App\Application\Entity\Sport\Legumes\CherryTomato;
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
use App\Application\Entity\Sport\Menu\ProductCreation\Bread;
use App\Application\Entity\Sport\Oil\CocoOil;
use App\Application\Entity\Sport\Oil\OliveOil;
use App\Application\Entity\Sport\Sauce\SojaSauce;

class EggsCasseroleTomatoFeta extends HightCarbMenu
{

    private Bread $bread;

    private CherryTomato $cherryTomato;

    private Eggs $eggs;

    private Feta $feta;

    private Oignon $oignon;

    private Hazelnut $hazelnut;

    private OliveOil $oliveOil;

    private Basilic  $basilic;

    private Salt $salt;


    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Oeufs à la cocottes accompagné de tomates et de feta";
        $this->pathLogo = "eggsCasseroleTomatoFeta.jpg";
        $this->nameClass = "EggsCasseroleTomatoFeta";
        $this->diet = ["normal"];
        $this->intolerance = ["eggs"];
        $this->setDefineNumberCaloriesTotalForMenuHightCarb();
        $this->bread = new Bread($this->human);
        $totalCaloriesBread = $this->bread->getTotalCaloriesAliments();
        $this->cherryTomato = new CherryTomato(($this->totalCalories-$totalCaloriesBread) * 0.06);
        $this->eggs = new Eggs(($this->totalCalories-$totalCaloriesBread) * 0.45);
        $this->feta = new Feta(($this->totalCalories-$totalCaloriesBread) * 0.2);
        $this->oignon = new Oignon(($this->totalCalories-$totalCaloriesBread) * 0.04);
        $this->hazelnut = new Hazelnut(($this->totalCalories-$totalCaloriesBread) * 0.2);
        $this->oliveOil = new OliveOil(($this->totalCalories-$totalCaloriesBread) * 0.1);
        $this->basilic = new Basilic(0.00001);
        $this->salt = new Salt(0.0001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->cherryTomato,
            $this->eggs,
            $this->feta,
            $this->oignon,
            $this->hazelnut,
            $this->oliveOil,
            $this->basilic,
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