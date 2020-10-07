<?php


namespace App\Application\Entity\Sport\Menu\Breakfast;


use App\Application\Entity\Fruits\Nutrition\FruitsRouges\Strawberry;
use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\FoodBicarbonate;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\Parsley;
use App\Application\Entity\Sport\Condiments\Vanilla;
use App\Application\Entity\Sport\Fat\AlmondPowder;
use App\Application\Entity\Sport\Fat\Avocado;
use App\Application\Entity\Sport\Fat\BlackChocolate;
use App\Application\Entity\Sport\Feculents\BuckwheatFlour;
use App\Application\Entity\Sport\Feculents\Cacaco;
use App\Application\Entity\Sport\Feculents\Dates;
use App\Application\Entity\Sport\Feculents\OatMeal;
use App\Application\Entity\Sport\Fish\SmokedSalmon;
use App\Application\Entity\Sport\Fruits\Banane;
use App\Application\Entity\Sport\Legumes\CherryTomato;
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
use App\Application\Entity\Sport\Meat\WhiteMeat\WhiteHamWithoutRind;
use App\Application\Entity\Sport\Milk\AlmondMilk;
use App\Application\Entity\Sport\Oil\CocoOil;
use App\Application\Entity\Sport\Oil\OliveOil;
use App\Application\Entity\Sport\Sauce\SojaSauce;
use App\Application\Entity\Sport\Sugar\Natural\Honey;
use App\Application\Entity\Sport\Sugar\Natural\Stevia;

class BuckwheatPancake extends BreakfastMenu
{

    private Eggs $eggs;

    private BuckwheatFlour $buckwheatFlour;

    private AlmondMilk $almondMilk;

    private BlackChocolate $blackChocolate;

    private OliveOil $oliveOil;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Crêpe à la farine de sarrasin";
        $this->pathLogo = "buckwheatPancake.jpg";
        $this->nameClass = "BuckwheatPancake";
        $this->diet = ["normal"];
        $this->intolerance = ["oeuf", "nuts", "chocolate"];
        $this->setDefineNumberCaloriesTotalForBreakfast();
        $this->eggs = new Eggs($this->totalCalories * 0.35);
        $this->buckwheatFlour = new BuckwheatFlour($this->totalCalories * 0.35);
        $this->almondMilk = new AlmondMilk($this->totalCalories * 0.04);
        $this->blackChocolate = new BlackChocolate($this->totalCalories * 0.2);
        $this->oliveOil = new OliveOil($this->totalCalories * 0.06);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->eggs,
            $this->buckwheatFlour,
            $this->almondMilk,
            $this->blackChocolate,
            $this->oliveOil,
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