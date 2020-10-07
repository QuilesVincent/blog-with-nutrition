<?php


namespace App\Application\Entity\Sport\Menu\HightCarb;


use App\Application\Entity\Sport\Condiments\Basilic;
use App\Application\Entity\Sport\Condiments\CurryPaste;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\Paprika;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Fat\Cheese\Feta;
use App\Application\Entity\Sport\Fat\SoyCream;
use App\Application\Entity\Sport\Feculents\OatMeal;
use App\Application\Entity\Sport\Legumes\Cucumber;
use App\Application\Entity\Sport\Legumes\Garlic;
use App\Application\Entity\Sport\Legumes\Zucchini;
use App\Application\Entity\Sport\Meat\WhiteMeat\RawChickenFillet;
use App\Application\Entity\Sport\Oil\OliveOil;

class ChickendAndZucchiniFries extends HightCarbMenu
{

    private RawChickenFillet $rawChickenFillet;

    private Cucumber $cucumber;

    private Feta $feta;

    private LemonJuice $lemonJuice;

    private OliveOil $oliveOil;

    private Basilic  $basilic;

    private Origan $origan;

    private Garlic $garlic;

    private Salt $salt;

    private Zucchini $zucchini;

    private OatMeal $oatMeal;

    private SoyCream $soyCream;

    private CurryPaste $curryPaste;

    private Paprika $paprika;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Brochettes de poulet et frites de courgettes";
        $this->pathLogo = "chickendAndZucchiniFries.jpg";
        $this->nameClass = "ChickendAndZucchiniFries";
        $this->diet = ["normal"];
        $this->intolerance = ["milk", "peanut"];
        $this->setDefineNumberCaloriesTotalForMenuLowCarb();
        $this->rawChickenFillet = new RawChickenFillet($this->totalCalories * 0.4);
        $this->cucumber = new Cucumber($this->totalCalories * 0.04);
        $this->feta = new Feta($this->totalCalories * 0.2);
        $this->lemonJuice = new LemonJuice(0.0001);
        $this->oliveOil = new OliveOil($this->totalCalories * 0.14);
        $this->basilic = new Basilic(0.00001);
        $this->origan = new Origan(0.0001);
        $this->garlic = new Garlic($this->totalCalories * 0.05);
        $this->salt = new Salt(0.0001);
        $this->zucchini = new Zucchini($this->totalCalories * 0.05);
        $this->oatMeal = new OatMeal($this->totalCalories * 0.1);
        $this->soyCream = new SoyCream($this->totalCalories * 0.05);
        $this->curryPaste = new CurryPaste($this->totalCalories * 0.05);
        $this->paprika = new Paprika(0.0001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->rawChickenFillet,
            $this->cucumber,
            $this->feta,
            $this->lemonJuice,
            $this->oliveOil,
            $this->basilic,
            $this->origan,
            $this->garlic,
            $this->salt,
            $this->zucchini,
            $this->oatMeal,
            $this->soyCream,
            $this->curryPaste,
            $this->paprika
        ];
    }

    public function setDefineNumberCaloriesTotalForMenuLowCarb()
    {
        if ($this->human->getTotalCaloriesNeeded() < 1800) {
            $totalCaloriesMenu = $this->human->getTotalCaloriesNeeded() * 0.30;
        } elseif ($this->human->getTotalCaloriesNeeded() < 2200 && $this->human->getTotalCaloriesNeeded() > 1800) {
            $totalCaloriesMenu = $this->human->getTotalCaloriesNeeded() * 0.30;
        } else {
            $totalCaloriesMenu = $this->human->getTotalCaloriesNeeded() * 0.30;
        }
        $this->setTotalCalories($totalCaloriesMenu);

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