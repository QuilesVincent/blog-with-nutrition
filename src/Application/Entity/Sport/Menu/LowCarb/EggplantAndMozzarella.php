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
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Fat\BlackOlive;
use App\Application\Entity\Sport\Fat\Cheese\Feta;
use App\Application\Entity\Sport\Fat\Cheese\Mozzarella;
use App\Application\Entity\Sport\Fat\CocoMilk;
use App\Application\Entity\Sport\Fat\Nuts;
use App\Application\Entity\Sport\Fat\SoyCream;
use App\Application\Entity\Sport\Feculents\GaletteWrap;
use App\Application\Entity\Sport\Feculents\OatMeal;
use App\Application\Entity\Sport\Feculents\WholeSugar;
use App\Application\Entity\Sport\Fish\Salmon;
use App\Application\Entity\Sport\Legumes\Cucumber;
use App\Application\Entity\Sport\Legumes\Eggplant;
use App\Application\Entity\Sport\Legumes\Garlic;
use App\Application\Entity\Sport\Legumes\GreenSalad;
use App\Application\Entity\Sport\Legumes\Mushroom;
use App\Application\Entity\Sport\Legumes\Oignon;
use App\Application\Entity\Sport\Legumes\Pepper;
use App\Application\Entity\Sport\Legumes\RawCarrot;
use App\Application\Entity\Sport\Legumes\Tomato;
use App\Application\Entity\Sport\Legumes\TomatoCoulis;
use App\Application\Entity\Sport\Legumes\Zucchini;
use App\Application\Entity\Sport\Meat\Other\Eggs;
use App\Application\Entity\Sport\Meat\WhiteMeat\RawChickenFillet;
use App\Application\Entity\Sport\Oil\CocoOil;
use App\Application\Entity\Sport\Oil\OliveOil;
use App\Application\Entity\Sport\Sauce\SojaSauce;

class EggplantAndMozzarella extends LowCarbMenu
{

    private Eggplant $eggplant;

    private TomatoCoulis $tomatoCoulis;

    private Mozzarella $mozzarella;

    private BlackOlive $blackOlive;

    private WholeSugar $wholeSugar;

    private Garlic $garlic;

    private Nuts $nuts;

    private Basilic $basilic;

    private Salt $salt;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Aubergines et Mozzarella";
        $this->pathLogo = "eggplantAndMozzarella.jpg";
        $this->nameClass = "EggplantAndMozzarella";
        $this->diet = ["vegetarian"];
        $this->intolerance = ["nuts"];
        $this->setDefineNumberCaloriesTotalForMenuLowCarb();
        $this->eggplant = new Eggplant($this->totalCalories * 0.18);
        $this->tomatoCoulis = new TomatoCoulis($this->totalCalories * 0.07);
        $this->mozzarella = new Mozzarella($this->totalCalories * 0.35);
        $this->blackOlive = new BlackOlive($this->totalCalories * 0.08);
        $this->wholeSugar = new WholeSugar($this->totalCalories * 0.1);
        $this->garlic = new Garlic($this->totalCalories * 0.04);
        $this->nuts = new Nuts($this->totalCalories * 0.33);
        $this->basilic = new Basilic(0.0001);
        $this->salt = new Salt(0.0001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->eggplant,
            $this->tomatoCoulis,
            $this->mozzarella,
            $this->blackOlive,
            $this->wholeSugar,
            $this->garlic,
            $this->nuts,
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