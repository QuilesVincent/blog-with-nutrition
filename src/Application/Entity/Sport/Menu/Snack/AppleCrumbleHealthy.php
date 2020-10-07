<?php


namespace App\Application\Entity\Sport\Menu\Snack;


use App\Application\Entity\Fruits\Nutrition\FruitsRouges\Bluebbery;
use App\Application\Entity\Human;
use App\Application\Entity\Sport\Condiments\BakingPowder;
use App\Application\Entity\Sport\Condiments\Cinnamon;
use App\Application\Entity\Sport\Condiments\FoodBicarbonate;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Vanilla;
use App\Application\Entity\Sport\Fat\AlmondButter;
use App\Application\Entity\Sport\Fat\AlmondPowder;
use App\Application\Entity\Sport\Fat\Avocado;
use App\Application\Entity\Sport\Fat\BlackChocolate;
use App\Application\Entity\Sport\Fat\Hazelnut;
use App\Application\Entity\Sport\Fat\SoyCream;
use App\Application\Entity\Sport\Feculents\Cacaco;
use App\Application\Entity\Sport\Feculents\Cardamom;
use App\Application\Entity\Sport\Feculents\CoconutFlour;
use App\Application\Entity\Sport\Feculents\GranolaMix;
use App\Application\Entity\Sport\Feculents\OatMeal;
use App\Application\Entity\Sport\Feculents\WholeSugar;
use App\Application\Entity\Sport\Fruits\Apple;
use App\Application\Entity\Sport\Fruits\Banane;
use App\Application\Entity\Sport\Fruits\Mango;
use App\Application\Entity\Sport\Fruits\Physalis;
use App\Application\Entity\Sport\Meat\Other\Eggs;
use App\Application\Entity\Sport\Milk\AlmondMilk;
use App\Application\Entity\Sport\Oil\CocoOil;
use App\Application\Entity\Sport\Seeds\ChiaSeed;
use App\Application\Entity\Sport\Seeds\SunflowerSeed;
use App\Application\Entity\Sport\Sugar\Natural\Honey;

class AppleCrumbleHealthy extends SnackMenu
{

    private Apple $apple;

    private OatMeal $oatMeal;

    private AlmondPowder $almondPowder;

    private Hazelnut $hazelnut;

    private Honey $honey;

    private CocoOil $cocoOil;

    private Cinnamon $cinnamon;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Crumble aux pommes healthy";
        $this->pathLogo = "appleCrumbleHealthy.jpg";
        $this->nameClass = "AppleCrumbleHealthy";
        $this->diet = ["vegetarian"];
        $this->intolerance = ["nuts", "gluten"];
        $this->setDefineNumberCaloriesTotalForSnack();
        $this->apple = new Apple($this->totalCalories * 0.3);
        $this->oatMeal = new OatMeal($this->totalCalories * 0.25);
        $this->almondPowder = new AlmondPowder($this->totalCalories * 0.25);
        $this->hazelnut = new Hazelnut($this->totalCalories * 0.25);
        $this->honey = new Honey($this->totalCalories * 0.1);
        $this->cocoOil = new CocoOil($this->totalCalories * 0.2);
        $this->cinnamon = new Cinnamon(0.00001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->apple,
            $this->oatMeal,
            $this->almondPowder,
            $this->hazelnut,
            $this->honey,
            $this->cocoOil,
            $this->cinnamon
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