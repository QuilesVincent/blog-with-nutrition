<?php


namespace App\Application\Entity\Sport\Menu\Breakfast;


use App\Application\Entity\Sport\Fruits\FruitsRouges\Strawberry;
use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Fat\AlmondPowder;
use App\Application\Entity\Sport\Fat\BlackChocolate;
use App\Application\Entity\Sport\Feculents\BuckwheatFlour;
use App\Application\Entity\Sport\Feculents\OatMeal;
use App\Application\Entity\Sport\Legumes\Garlic;
use App\Application\Entity\Sport\Legumes\Mushroom;
use App\Application\Entity\Sport\Legumes\Oignon;
use App\Application\Entity\Sport\Legumes\Pepper;
use App\Application\Entity\Sport\Legumes\Tomato;
use App\Application\Entity\Sport\Legumes\Zucchini;
use App\Application\Entity\Sport\Meat\Other\CottageCheese;
use App\Application\Entity\Sport\Meat\Other\Eggs;
use App\Application\Entity\Sport\Meat\Other\EggsWhites;
use App\Application\Entity\Sport\Meat\Other\WheyProteine;
use App\Application\Entity\Sport\Meat\WhiteMeat\RawChickenFillet;
use App\Application\Entity\Sport\Milk\AlmondMilk;
use App\Application\Entity\Sport\Oil\CocoOil;
use App\Application\Entity\Sport\Sauce\SojaSauce;
use App\Application\Entity\Sport\Sugar\Natural\Honey;
use App\Application\Entity\Sport\Sugar\Natural\Stevia;

class BolwcakeAmandeChocolat extends BreakfastMenu
{

    private OatMeal $oatMeal;

    private Eggs $eggs;

    private EggsWhites $eggsWhites;

    private WheyProteine $wheyProteine;

    private AlmondPowder $almondPowder;

    private AlmondMilk $almondMilk;

    private Honey $honey;

    private BlackChocolate $blackChocolate;

    private Strawberry $strawberry;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Bowlcake Amande and Chocolat";
        $this->pathLogo = "bolwcakeAmandeChocolat.jpg";
        $this->nameClass = "BolwcakeAmandeChocolat";
        $this->diet = ["normal"];
        $this->setDefineNumberCaloriesTotalForBreakfast();
        $this->oatMeal = new OatMeal($this->totalCalories * 0.2);
        $this->eggs = new Eggs($this->totalCalories * 0.18);
        $this->eggsWhites = new EggsWhites($this->totalCalories * 0.04);
        $this->wheyProteine = new WheyProteine($this->totalCalories * 0.15);
        $this->almondPowder = new AlmondPowder($this->totalCalories * 0.2);
        $this->almondMilk = new AlmondMilk($this->totalCalories * 0.02);
        $this->honey = new Honey($this->totalCalories * 0.07);
        $this->blackChocolate = new BlackChocolate($this->totalCalories * 0.15);
        $this->strawberry = new Strawberry($this->totalCalories * 0.05);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->oatMeal,
            $this->eggs,
            $this->eggsWhites,
            $this->wheyProteine,
            $this->almondPowder,
            $this->almondMilk,
            $this->honey,
            $this->blackChocolate,
            $this->strawberry
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