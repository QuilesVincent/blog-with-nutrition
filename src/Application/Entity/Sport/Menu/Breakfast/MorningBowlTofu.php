<?php


namespace App\Application\Entity\Sport\Menu\Breakfast;


use App\Application\Entity\Fruits\Nutrition\FruitsRouges\Strawberry;
use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\FoodBicarbonate;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Fat\AlmondPowder;
use App\Application\Entity\Sport\Fat\BlackChocolate;
use App\Application\Entity\Sport\Feculents\BuckwheatFlour;
use App\Application\Entity\Sport\Feculents\Cacaco;
use App\Application\Entity\Sport\Feculents\GranolaMix;
use App\Application\Entity\Sport\Feculents\MapleSyrup;
use App\Application\Entity\Sport\Feculents\OatMeal;
use App\Application\Entity\Sport\Fruits\Banane;
use App\Application\Entity\Sport\Fruits\Pear;
use App\Application\Entity\Sport\Fruits\Pineapple;
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
use App\Application\Entity\Sport\Other\TofouSoyeux;
use App\Application\Entity\Sport\Sauce\SojaSauce;
use App\Application\Entity\Sport\Sugar\Natural\Honey;
use App\Application\Entity\Sport\Sugar\Natural\Stevia;
use Doctrine\DBAL\Platforms\Keywords\MariaDb102Keywords;

class MorningBowlTofu extends BreakfastMenu
{

    private TofouSoyeux $tofouSoyeux;

    private Cacaco $cacao;

    private MapleSyrup $mapleSyrup;

    private GranolaMix $granolaMix;

    private Pear $pear;

    private BlackChocolate $blackChocolate;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "MorningBowl au Tofu soyeux";
        $this->pathLogo = "morningBowlTofu.jpg";
        $this->nameClass = "MorningBowlTofu";
        $this->diet = ["vegetarian"];
        $this->intolerance = ["milk", "nuts", "chocolate"];
        $this->setDefineNumberCaloriesTotalForBreakfast();
        $this->tofouSoyeux = new TofouSoyeux($this->totalCalories * 0.12);
        $this->cacao = new Cacaco($this->totalCalories * 0.1);
        $this->mapleSyrup = new MapleSyrup($this->totalCalories * 0.1);
        $this->granolaMix = new GranolaMix($this->totalCalories * 0.2);
        $this->pear = new Pear($this->totalCalories * 0.15);
        $this->blackChocolate = new BlackChocolate($this->totalCalories * 0.15);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->tofouSoyeux,
            $this->cacao,
            $this->mapleSyrup,
            $this->granolaMix,
            $this->pear,
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