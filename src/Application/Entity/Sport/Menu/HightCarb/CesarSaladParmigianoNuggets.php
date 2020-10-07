<?php


namespace App\Application\Entity\Sport\Menu\HightCarb;


use App\Application\Entity\Fruits\Nutrition\FruitsRouges\Cherry;
use App\Application\Entity\Sport\Condiments\Basilic;
use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\Curry;
use App\Application\Entity\Sport\Condiments\CurryPaste;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\MasalaSpice;
use App\Application\Entity\Sport\Condiments\Mustard;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\Paprika;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Fat\Almond;
use App\Application\Entity\Sport\Fat\Avocado;
use App\Application\Entity\Sport\Fat\Cheese\Feta;
use App\Application\Entity\Sport\Fat\Cheese\ParmigianoReggiano;
use App\Application\Entity\Sport\Fat\CocoMilk;
use App\Application\Entity\Sport\Fat\Nuts;
use App\Application\Entity\Sport\Fat\SoyCream;
use App\Application\Entity\Sport\Feculents\GaletteWrap;
use App\Application\Entity\Sport\Feculents\OatMeal;
use App\Application\Entity\Sport\Fish\Salmon;
use App\Application\Entity\Sport\Legumes\CherryTomato;
use App\Application\Entity\Sport\Legumes\Cucumber;
use App\Application\Entity\Sport\Legumes\Garlic;
use App\Application\Entity\Sport\Legumes\GreenSalad;
use App\Application\Entity\Sport\Legumes\Mushroom;
use App\Application\Entity\Sport\Legumes\Oignon;
use App\Application\Entity\Sport\Legumes\Pepper;
use App\Application\Entity\Sport\Legumes\RawCarrot;
use App\Application\Entity\Sport\Legumes\Tomato;
use App\Application\Entity\Sport\Legumes\Zucchini;
use App\Application\Entity\Sport\Meat\Other\Eggs;
use App\Application\Entity\Sport\Meat\WhiteMeat\RawChickenFillet;
use App\Application\Entity\Sport\Oil\CocoOil;
use App\Application\Entity\Sport\Oil\OliveOil;
use App\Application\Entity\Sport\Sauce\SojaSauce;

class CesarSaladParmigianoNuggets extends HightCarbMenu
{

    private RawChickenFillet $rawChickenFillet;

    private OatMeal $oatMeal;

    private MasalaSpice $masalaSpice;

    private Salt $salt;

    private GreenSalad $greenSalad;

    private CherryTomato $cherryTomato;

    private Cucumber $cucumber;

    private Avocado $avocado;

    private Almond $almond;

    private SoyCream $soyCream;

    private ParmigianoReggiano $parmigianoReggiano;

    private LemonJuice $lemonJuice;

    private Garlic $garlic;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Salade César nuggets et parmesan (Max 2 fois par semaines)";
        $this->pathLogo = "cesarSaladParmigianoNuggets.jpg";
        $this->nameClass = "CesarSaladParmigianoNuggets";
        $this->diet = ["normal"];
        $this->intolerance = ["nuts", "soja"];
        $this->setDefineNumberCaloriesTotalForMenuHightCarb();
        $this->rawChickenFillet = new RawChickenFillet($this->totalCalories * 0.25);
        $this->oatMeal = new OatMeal($this->totalCalories * 0.15);
        $this->masalaSpice = new MasalaSpice(0.0001);
        $this->salt = new Salt(0.0001);
        $this->greenSalad = new GreenSalad($this->totalCalories * 0.03);
        $this->cherryTomato = new CherryTomato($this->totalCalories * 0.03);
        $this->cucumber = new Cucumber($this->totalCalories * 0.02);
        $this->avocado = new Avocado($this->totalCalories * 0.35);
        $this->almond = new Almond($this->totalCalories * 0.15);
        $this->soyCream = new SoyCream($this->totalCalories * 0.07);
        $this->parmigianoReggiano = new ParmigianoReggiano($this->totalCalories * 0.13);
        $this->lemonJuice = new LemonJuice(0.0001);
        $this->garlic = new Garlic($this->totalCalories * 0.02);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->rawChickenFillet,
            $this->oatMeal,
            $this->masalaSpice,
            $this->salt,
            $this->greenSalad,
            $this->cherryTomato,
            $this->cucumber,
            $this->avocado,
            $this->almond,
            $this->soyCream,
            $this->parmigianoReggiano,
            $this->lemonJuice,
            $this->garlic
        ];
    }


    public function setExplication(): void
    {
        $this->explication = [
            'Max 2 fois par semaines',
            'Faire chauffer le gaufrier.',
            'Dans un bol, mélanger tous les ingrédients, sans oublier l\'huile de coco, le stick de stevia, l\'arôme vanille, et la levure à la fin. Ajuster la quantité de lait d\'amande afin d\'obtenir la texture souhaitée (doit rester assez consistante).',
            'Huiler légèrement à l\'huile de coco le gaufrier afin d\'éviter aux gaufres de coller. Etaler la pâte uniformément sans trop en mettre afin de ne pas faire déborder à la cuisson',
            'Pour servir : ajouter les fraises et un filet de miel par dessus les gaufres (possibilité d\'ajouter du fromage blanc 3%)'
        ];
    }


}