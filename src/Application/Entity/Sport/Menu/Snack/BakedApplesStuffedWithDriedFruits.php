<?php


namespace App\Application\Entity\Sport\Menu\Snack;


use App\Application\Entity\Fruits\Nutrition\FruitsRouges\Bluebbery;
use App\Application\Entity\Human;
use App\Application\Entity\Sport\Condiments\BakingPowder;
use App\Application\Entity\Sport\Condiments\Cinnamon;
use App\Application\Entity\Sport\Condiments\FoodBicarbonate;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Condiments\Vanilla;
use App\Application\Entity\Sport\Fat\AlmondButter;
use App\Application\Entity\Sport\Fat\AlmondPowder;
use App\Application\Entity\Sport\Fat\Avocado;
use App\Application\Entity\Sport\Fat\BlackChocolate;
use App\Application\Entity\Sport\Fat\Hazelnut;
use App\Application\Entity\Sport\Fat\Nuts;
use App\Application\Entity\Sport\Fat\SoyCream;
use App\Application\Entity\Sport\Feculents\Cacaco;
use App\Application\Entity\Sport\Feculents\Cardamom;
use App\Application\Entity\Sport\Feculents\CoconutFlour;
use App\Application\Entity\Sport\Feculents\GranolaMix;
use App\Application\Entity\Sport\Feculents\MapleSyrup;
use App\Application\Entity\Sport\Feculents\OatMeal;
use App\Application\Entity\Sport\Feculents\Raisin;
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

class BakedApplesStuffedWithDriedFruits extends SnackMenu
{

    private Apple $apple;

    private Raisin $raisin;

    private Nuts $nuts;

    private MapleSyrup $mapleSyrup;

    private Cinnamon $cinnamon;

    private Salt $salt;


    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Pommes au four farcies aux fruits secs";
        $this->pathLogo = "bakedApplesStuffedWithDriedFruits.jpeg";
        $this->nameClass = "BakedApplesStuffedWithDriedFruits";
        $this->diet = ["normal"];
        $this->intolerance = ["nuts"];
        $this->setDefineNumberCaloriesTotalForSnack();
        $this->apple = new Apple($this->totalCalories * 0.4);
        $this->raisin = new Raisin($this->totalCalories * 0.25);
        $this->nuts = new Nuts($this->totalCalories * 0.3);
        $this->mapleSyrup = new MapleSyrup($this->totalCalories * 0.15);
        $this->cinnamon = new Cinnamon(0.0001);
        $this->salt = new Salt(0.0001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->apple,
            $this->raisin,
            $this->nuts,
            $this->mapleSyrup,
            $this->cinnamon,
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