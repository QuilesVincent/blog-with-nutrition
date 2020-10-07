<?php


namespace App\Application\Entity\Sport\Menu\Breakfast;


use App\Application\Entity\Fruits\Nutrition\FruitsRouges\Strawberry;
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
use App\Application\Entity\Sport\Oil\OliveOil;
use App\Application\Entity\Sport\Sauce\SojaSauce;
use App\Application\Entity\Sport\Sugar\Natural\Honey;
use App\Application\Entity\Sport\Sugar\Natural\Stevia;

class EggsPepperBreakfast extends BreakfastMenu
{

    private Pepper $pepper;

    private Eggs $eggs;

    private OliveOil $oliveOil;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Oeufs à la poele dans beau poivron de couleur";
        $this->pathLogo = "eggsPeperBreakfast.jpg";
        $this->nameClass = "EggsPepperBreakfast";
        $this->diet = ["normal"];
        $this->intolerance = ["oeuf"];
        $this->setDefineNumberCaloriesTotalForBreakfast();
        $this->pepper = new Pepper($this->totalCalories * 0.12);
        $this->eggs = new Eggs($this->totalCalories * 0.5);
        $this->oliveOil = new OliveOil($this->totalCalories * 0.12);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->pepper,
            $this->eggs,
            $this->oliveOil
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