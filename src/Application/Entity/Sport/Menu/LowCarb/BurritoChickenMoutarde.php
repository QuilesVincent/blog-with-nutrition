<?php


namespace App\Application\Entity\Sport\Menu\LowCarb;


use App\Application\Entity\Sport\Condiments\Basilic;
use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\Curry;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Mustard;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\Paprika;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Fat\CocoMilk;
use App\Application\Entity\Sport\Fat\Nuts;
use App\Application\Entity\Sport\Feculents\GaletteWrap;
use App\Application\Entity\Sport\Fish\Salmon;
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

class BurritoChickenMoutarde extends LowCarbMenu
{

    private RawChickenFillet $rawChickenFillet;

    private GaletteWrap $galetteWrap;

    private Mustard $mustard;

    private OliveOil $oliveOil;

    private LemonJuice $lemonJuice;

    private Basilic $basilic;

    private Zucchini $zucchini;

    private Salt $salt;

    private Paprika $paprika;

    private Curry $curry;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Burrito au poulet et à la moutarde";
        $this->pathLogo = "burritoChickenMoutarde.jpg";
        $this->nameClass = "BurritoChickenMoutarde";
        $this->diet = ["normal"];
        $this->intolerance = ["gluten"];
        $this->setDefineNumberCaloriesTotalForMenuLowCarb();
        $this->rawChickenFillet = new RawChickenFillet($this->totalCalories * 0.4);
        $this->galetteWrap = new GaletteWrap($this->totalCalories * 0.4);
        $this->mustard = new Mustard($this->totalCalories * 0.08);
        $this->oliveOil = new OliveOil($this->totalCalories * 0.1);
        $this->lemonJuice = new LemonJuice(0.0001);
        $this->basilic = new Basilic(0.0001);
        $this->zucchini = new Zucchini($this->totalCalories * 0.08);
        $this->salt = new Salt(0.0001);
        $this->paprika = new Paprika(0.0001);
        $this->curry = new Curry(0.0001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->rawChickenFillet,
            $this->galetteWrap,
            $this->mustard,
            $this->oliveOil,
            $this->lemonJuice,
            $this->basilic,
            $this->zucchini,
            $this->salt,
            $this->paprika,
            $this->curry
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