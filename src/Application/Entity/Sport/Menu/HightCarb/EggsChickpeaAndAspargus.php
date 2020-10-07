<?php


namespace App\Application\Entity\Sport\Menu\HightCarb;


use App\Application\Entity\Feculents\RawPasta;
use App\Application\Entity\Fruits\Nutrition\FruitsRouges\Cherry;
use App\Application\Entity\Sport\Condiments\Basilic;
use App\Application\Entity\Sport\Condiments\Chive;
use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\Curry;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\PepperCondiment;
use App\Application\Entity\Sport\Condiments\ProvenceGrass;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Condiments\Thym;
use App\Application\Entity\Sport\Fat\Avocado;
use App\Application\Entity\Sport\Fat\Cheese\ParmigianoReggiano;
use App\Application\Entity\Sport\Fat\ClarifiedButter;
use App\Application\Entity\Sport\Fat\SoyCream;
use App\Application\Entity\Sport\Feculents\Chickpea;
use App\Application\Entity\Sport\Feculents\WholeSugar;
use App\Application\Entity\Sport\Fish\Shrimp;
use App\Application\Entity\Sport\Legumes\CherryTomato;
use App\Application\Entity\Sport\Legumes\Garlic;
use App\Application\Entity\Sport\Legumes\GreenAsparagus;
use App\Application\Entity\Sport\Legumes\Mushroom;
use App\Application\Entity\Sport\Legumes\Oignon;
use App\Application\Entity\Sport\Legumes\Pepper;
use App\Application\Entity\Sport\Legumes\RedOignon;
use App\Application\Entity\Sport\Legumes\Tomato;
use App\Application\Entity\Sport\Legumes\TomatoConfit;
use App\Application\Entity\Sport\Legumes\Zucchini;
use App\Application\Entity\Sport\Meat\Other\Eggs;
use App\Application\Entity\Sport\Meat\WhiteMeat\ChickenThigh;
use App\Application\Entity\Sport\Meat\WhiteMeat\RawChickenFillet;
use App\Application\Entity\Sport\Oil\CocoOil;
use App\Application\Entity\Sport\Oil\OliveOil;
use App\Application\Entity\Sport\Sauce\SojaSauce;

class EggsChickpeaAndAspargus extends HightCarbMenu
{

    private Chickpea $chickpea;

    private Eggs $eggs;

    private GreenAsparagus $greenAsparagus;

    private Avocado $avocado;

    private RedOignon $redOignon;

    private CocoOil $cocoOil;

    private Curry $curry;

    private Cumin $cumin;

    private Chive $chive;

    private PepperCondiment $pepperCondiment;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Oeufs pois chiche et asperges vertes";
        $this->pathLogo = "eggsChickpeaAndAspargus.jpg";
        $this->nameClass = "EggsChickpeaAndAspargus";
        $this->diet = ["normal"];
        $this->intolerance = ["eggs"];
        $this->setDefineNumberCaloriesTotalForMenuHightCarb();
        $this->chickpea = new Chickpea($this->totalCalories * 0.25);
        $this->eggs = new Eggs($this->totalCalories * 0.4);
        $this->greenAsparagus = new GreenAsparagus($this->totalCalories * 0.1);
        $this->avocado = new Avocado($this->totalCalories * 0.2);
        $this->redOignon = new RedOignon($this->totalCalories * 0.04);
        $this->cocoOil = new CocoOil($this->totalCalories * 0.06);
        $this->curry = new Curry(0.00001);
        $this->cumin = new Cumin(0.00001);
        $this->chive = new Chive(0.00001);
        $this->pepperCondiment = new PepperCondiment(0.00001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->chickpea,
            $this->eggs,
            $this->greenAsparagus,
            $this->avocado,
            $this->redOignon,
            $this->cocoOil,
            $this->curry,
            $this->cumin,
            $this->chive,
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