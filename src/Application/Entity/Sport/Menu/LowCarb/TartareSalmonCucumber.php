<?php


namespace App\Application\Entity\Sport\Menu\LowCarb;


use App\Application\Entity\Fruits\Nutrition\FruitsRouges\Cherry;
use App\Application\Entity\Sport\Condiments\Basilic;
use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\Curry;
use App\Application\Entity\Sport\Condiments\CurryPaste;
use App\Application\Entity\Sport\Condiments\Dill;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Mustard;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\Paprika;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Condiments\Thym;
use App\Application\Entity\Sport\Fat\Cheese\Feta;
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

class TartareSalmonCucumber extends LowCarbMenu
{

    private GreenSalad $greenSalad;

    private Salmon $salmon;

    private CherryTomato $cherryTomato;

    private Cucumber $cucumber;

    private LemonJuice $lemonJuice;

    private SoyCream $soyCream;

    private OliveOil $oliveOil;

    private Thym $thym;

    private Dill $dill;

    private Salt $salt;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Tartare de saumon et concombre";
        $this->pathLogo = "tartareSalmonCucumber.jpg";
        $this->nameClass = "TartareSalmonCucumber";
        $this->diet = ["normal", "fish"];
        $this->intolerance = ["soja"];
        $this->setDefineNumberCaloriesTotalForMenuLowCarb();
        $this->greenSalad = new GreenSalad($this->totalCalories * 0.04);
        $this->salmon = new Salmon($this->totalCalories * 0.7);
        $this->cherryTomato = new CherryTomato($this->totalCalories * 0.06);
        $this->cucumber = new Cucumber($this->totalCalories * 0.04);
        $this->lemonJuice = new LemonJuice(0.0001);
        $this->oliveOil = new OliveOil($this->totalCalories * 0.14);
        $this->thym = new Thym(0.00001);
        $this->dill = new Dill(0.0001);
        $this->salt = new Salt(0.0001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->greenSalad,
            $this->salmon,
            $this->cherryTomato,
            $this->cucumber,
            $this->lemonJuice,
            $this->oliveOil,
            $this->thym,
            $this->dill,
            $this->salt,
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