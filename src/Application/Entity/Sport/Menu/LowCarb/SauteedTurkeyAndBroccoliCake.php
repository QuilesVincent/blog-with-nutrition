<?php


namespace App\Application\Entity\Sport\Menu\LowCarb;


use App\Application\Entity\Sport\Meat\WhiteMeat\RawTurkeyEscalope;
use App\Application\Entity\Sport\Condiments\Basilic;
use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\Curry;
use App\Application\Entity\Sport\Condiments\CurryPaste;
use App\Application\Entity\Sport\Condiments\KubOr;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Mustard;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\Paprika;
use App\Application\Entity\Sport\Condiments\PepperCondiment;
use App\Application\Entity\Sport\Condiments\ProvenceGrass;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Fat\Cheese\Feta;
use App\Application\Entity\Sport\Fat\Cheese\ParmigianoReggiano;
use App\Application\Entity\Sport\Fat\CocoMilk;
use App\Application\Entity\Sport\Fat\Nuts;
use App\Application\Entity\Sport\Fat\SoyCream;
use App\Application\Entity\Sport\Feculents\GaletteWrap;
use App\Application\Entity\Sport\Feculents\OatBran;
use App\Application\Entity\Sport\Feculents\OatMeal;
use App\Application\Entity\Sport\Fish\Salmon;
use App\Application\Entity\Sport\Legumes\Broccoli;
use App\Application\Entity\Sport\Legumes\ChoicesVegetables;
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
use App\Application\Entity\Sport\Meat\Vegetables\SojaSausage;
use App\Application\Entity\Sport\Meat\WhiteMeat\RawChickenFillet;
use App\Application\Entity\Sport\Oil\CocoOil;
use App\Application\Entity\Sport\Oil\OliveOil;
use App\Application\Entity\Sport\Sauce\SojaSauce;

class SauteedTurkeyAndBroccoliCake extends LowCarbMenu
{

    private RawTurkeyEscalope $rawTurkeyEscalope;

    private Broccoli $broccoli;

    private CocoMilk $cocoMilk;

    private Eggs $eggs;

    private OatBran $oatBran;

    private OliveOil $oliveOil;

    private Oignon $oignon;

    private Garlic $garlic;

    private Origan $origan;

    private Salt $salt;

    private PepperCondiment $pepperCondiment;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Filet de Dinde et ses Cakes de brocolis";
        $this->pathLogo = "sauteedTurkeyAndBroccoliCake.jpeg";
        $this->nameClass = "SauteedTurkeyAndBroccoliCake";
        $this->diet = ["normal"];
        $this->setDefineNumberCaloriesTotalForMenuLowCarb();
        $this->rawTurkeyEscalope = new RawTurkeyEscalope($this->totalCalories * 0.35);
        $this->broccoli = new Broccoli($this->totalCalories * 0.16);
        $this->cocoMilk = new CocoMilk($this->totalCalories * 0.08);
        $this->eggs = new Eggs($this->totalCalories * 0.22);
        $this->oatBran = new OatBran($this->totalCalories * 0.11);
        $this->oliveOil = new OliveOil($this->totalCalories * 0.1);
        $this->oignon = new Oignon($this->totalCalories * 0.05);
        $this->garlic = new Garlic(0.00001);
        $this->origan = new Origan(0.00001);
        $this->salt = new Salt(0.00001);
        $this->pepperCondiment = new PepperCondiment(0.00001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->rawTurkeyEscalope,
            $this->broccoli,
            $this->cocoMilk,
            $this->eggs,
            $this->oatBran,
            $this->oliveOil,
            $this->oignon,
            $this->garlic,
            $this->origan,
            $this->salt,
            $this->pepperCondiment
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