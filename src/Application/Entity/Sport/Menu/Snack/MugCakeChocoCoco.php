<?php


namespace App\Application\Entity\Sport\Menu\Snack;


use App\Application\Entity\Human;
use App\Application\Entity\Sport\Condiments\BakingPowder;
use App\Application\Entity\Sport\Condiments\FoodBicarbonate;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Vanilla;
use App\Application\Entity\Sport\Fat\AlmondButter;
use App\Application\Entity\Sport\Fat\Avocado;
use App\Application\Entity\Sport\Fat\BlackChocolate;
use App\Application\Entity\Sport\Fat\SoyCream;
use App\Application\Entity\Sport\Feculents\Cacaco;
use App\Application\Entity\Sport\Feculents\Cardamom;
use App\Application\Entity\Sport\Feculents\CoconutFlour;
use App\Application\Entity\Sport\Feculents\OatMeal;
use App\Application\Entity\Sport\Feculents\WholeSugar;
use App\Application\Entity\Sport\Fruits\Apple;
use App\Application\Entity\Sport\Fruits\Banane;
use App\Application\Entity\Sport\Fruits\Mango;
use App\Application\Entity\Sport\Meat\Other\Eggs;
use App\Application\Entity\Sport\Milk\AlmondMilk;
use App\Application\Entity\Sport\Seeds\ChiaSeed;
use App\Application\Entity\Sport\Seeds\SunflowerSeed;
use App\Application\Entity\Sport\Sugar\Natural\Honey;

class MugCakeChocoCoco extends SnackMenu
{

    private Eggs $eggs;

    private AlmondMilk $almondMilk;

    private CoconutFlour $coconutFLour;

    private BlackChocolate $blackChocolate;

    private WholeSugar $wholeSugar;

    private BakingPowder $bakingPowder;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Mug Cake Choco Coco (Max 2 fois par semaine)";
        $this->pathLogo = "mugCakeChocoCoco.jpg";
        $this->nameClass = "MugCakeChocoCoco";
        $this->diet = ["normal"];
        $this->intolerance = ["eggs", "nuts", "chocolate"];
        $this->setDefineNumberCaloriesTotalForSnack();
        $this->eggs = new Eggs($this->totalCalories * 0.45);
        $this->almondMilk = new AlmondMilk($this->totalCalories * 0.15);
        $this->coconutFLour = new CoconutFlour($this->totalCalories * 0.3);
        $this->blackChocolate = new BlackChocolate($this->totalCalories * 0.15);
        $this->wholeSugar = new WholeSugar($this->totalCalories * 0.2);
        $this->bakingPowder = new BakingPowder(0.000001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->eggs,
            $this->almondMilk,
            $this->coconutFLour,
            $this->blackChocolate,
            $this->wholeSugar,
            $this->bakingPowder
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