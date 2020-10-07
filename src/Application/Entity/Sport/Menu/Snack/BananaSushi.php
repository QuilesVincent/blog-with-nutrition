<?php


namespace App\Application\Entity\Sport\Menu\Snack;


use App\Application\Entity\Human;
use App\Application\Entity\Sport\Condiments\FoodBicarbonate;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Vanilla;
use App\Application\Entity\Sport\Fat\AlmondButter;
use App\Application\Entity\Sport\Fat\Avocado;
use App\Application\Entity\Sport\Fat\BlackChocolate;
use App\Application\Entity\Sport\Fat\SoyCream;
use App\Application\Entity\Sport\Feculents\Cacaco;
use App\Application\Entity\Sport\Feculents\Cardamom;
use App\Application\Entity\Sport\Feculents\OatMeal;
use App\Application\Entity\Sport\Fruits\Apple;
use App\Application\Entity\Sport\Fruits\Banane;
use App\Application\Entity\Sport\Fruits\Mango;
use App\Application\Entity\Sport\Meat\Other\Eggs;
use App\Application\Entity\Sport\Milk\AlmondMilk;
use App\Application\Entity\Sport\Seeds\ChiaSeed;
use App\Application\Entity\Sport\Seeds\SunflowerSeed;
use App\Application\Entity\Sport\Sugar\Natural\Honey;

class BananaSushi extends SnackMenu
{

    private Banane $banane;

    private AlmondButter $almondButter;

    private ChiaSeed $chiaSeed;

    private SunflowerSeed $sunflowerSeed;

    private BlackChocolate $blackChocolate;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Sushi à la banane";
        $this->pathLogo = "bananaSushi.jpg";
        $this->nameClass = "BananaSushi";
        $this->diet = ["vegetarian","normal"];
        $this->intolerance = ["nuts", "chocolate"];
        $this->setDefineNumberCaloriesTotalForSnack();
        $this->banane = new Banane($this->totalCalories * 0.5);
        $this->almondButter = new AlmondButter($this->totalCalories * 0.15);
        $this->chiaSeed = new ChiaSeed($this->totalCalories * 0.15);
        $this->sunflowerSeed = new SunflowerSeed($this->totalCalories * 0.15);
        $this->blackChocolate = new BlackChocolate($this->totalCalories * 0.15);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->banane,
            $this->almondButter,
            $this->chiaSeed,
            $this->sunflowerSeed,
            $this->blackChocolate
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