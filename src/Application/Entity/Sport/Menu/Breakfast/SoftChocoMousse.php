<?php


namespace App\Application\Entity\Sport\Menu\Breakfast;


use App\Application\Entity\Fruits\Nutrition\FruitsRouges\Strawberry;
use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\FoodBicarbonate;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\Vanilla;
use App\Application\Entity\Sport\Fat\AlmondPowder;
use App\Application\Entity\Sport\Fat\AlmondPuree;
use App\Application\Entity\Sport\Fat\BlackChocolate;
use App\Application\Entity\Sport\Feculents\BuckwheatFlour;
use App\Application\Entity\Sport\Feculents\Cacaco;
use App\Application\Entity\Sport\Feculents\Dates;
use App\Application\Entity\Sport\Feculents\GranolaMix;
use App\Application\Entity\Sport\Feculents\OatMeal;
use App\Application\Entity\Sport\Feculents\SweetPotatoes;
use App\Application\Entity\Sport\Fruits\Banane;
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

class SoftChocoMousse extends BreakfastMenu
{

    private SweetPotatoes $sweetPotatoes;

    private Cacaco $cacao;

    private Banane $banane;

    private Dates $dates;

    private Vanilla $vanilla;

    private AlmondPuree $almondPuree;

    private GranolaMix $granolaMix;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Mousse choco douce";
        $this->pathLogo = "softChocoMousse.jpg";
        $this->nameClass = "SoftChocoMousse";
        $this->diet = ["vegetarian"];
        $this->intolerance = ["nuts"];
        $this->setDefineNumberCaloriesTotalForBreakfast();
        $this->sweetPotatoes = new SweetPotatoes($this->totalCalories * 0.15);
        $this->cacao = new Cacaco($this->totalCalories * 0.1);
        $this->banane = new Banane($this->totalCalories * 0.25);
        $this->dates = new Dates($this->totalCalories * 0.1);
        $this->vanilla = new Vanilla(0.00001);
        $this->almondPuree = new AlmondPuree($this->totalCalories * 0.2);
        $this->granolaMix = new GranolaMix($this->totalCalories * 0.2);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->sweetPotatoes,
            $this->cacao,
            $this->banane,
            $this->dates,
            $this->vanilla,
            $this->almondPuree,
            $this->granolaMix
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