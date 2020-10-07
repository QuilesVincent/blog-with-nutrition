<?php


namespace App\Application\Entity\Sport\Menu\LowCarb;


use App\Application\Entity\Sport\Condiments\Basilic;
use App\Application\Entity\Sport\Condiments\Chive;
use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\Curry;
use App\Application\Entity\Sport\Condiments\CurryPaste;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Mustard;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\Paprika;
use App\Application\Entity\Sport\Condiments\PepperCondiment;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Fat\Cheese\Feta;
use App\Application\Entity\Sport\Fat\CocoMilk;
use App\Application\Entity\Sport\Fat\Nuts;
use App\Application\Entity\Sport\Fat\SoyCream;
use App\Application\Entity\Sport\Feculents\GaletteWrap;
use App\Application\Entity\Sport\Feculents\OatMeal;
use App\Application\Entity\Sport\Fish\Salmon;
use App\Application\Entity\Sport\Legumes\Cucumber;
use App\Application\Entity\Sport\Legumes\Garlic;
use App\Application\Entity\Sport\Legumes\GreenBean;
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
use App\Application\Entity\Sport\Seeds\SesameSeed;

class ChickenWok extends LowCarbMenu
{

    private RawChickenFillet $rawChickenFillet;

    private Oignon $oignon;

    private Pepper $pepper;

    private RawCarrot $rawCarrot;

    private GreenBean $greenBean;

    private OliveOil $oliveOil;

    private Chive $chive;

    private Garlic $garlic;

    private Salt $salt;

    private PepperCondiment $pepperCondiment;

    private SojaSauce $sojaSauce;

    private SesameSeed $sesameSeed;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Wok de poulet";
        $this->pathLogo = "chickenWok.jpg";
        $this->nameClass = "ChickenWok";
        $this->diet = ["normal"];
        $this->intolerance = ["soja", "sesame"];
        $this->setDefineNumberCaloriesTotalForMenuLowCarb();
        $this->rawChickenFillet = new RawChickenFillet($this->totalCalories * 0.4);
        $this->oignon = new Oignon($this->totalCalories * 0.05);
        $this->pepper = new Pepper($this->totalCalories * 0.1);
        $this->rawCarrot = new RawCarrot($this->totalCalories * 0.1);
        $this->greenBean = new GreenBean($this->totalCalories * 0.08);
        $this->oliveOil = new OliveOil($this->totalCalories * 0.1);
        $this->chive = new Chive(0.0001);
        $this->garlic = new Garlic($this->totalCalories * 0.04);
        $this->salt = new Salt(0.0001);
        $this->pepperCondiment = new PepperCondiment(0.0001);
        $this->sojaSauce = new SojaSauce($this->totalCalories * 0.04);
        $this->sesameSeed = new SesameSeed($this->totalCalories * 0.15);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->rawChickenFillet,
            $this->oignon,
            $this->pepper,
            $this->rawCarrot,
            $this->greenBean,
            $this->oliveOil,
            $this->chive,
            $this->garlic,
            $this->salt,
            $this->pepperCondiment,
            $this->sojaSauce,
            $this->sesameSeed,
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