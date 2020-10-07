<?php


namespace App\Application\Entity\Sport\Menu\HightCarb;


use App\Application\Entity\Feculents\RawPasta;
use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\PepperCondiment;
use App\Application\Entity\Sport\Condiments\ProvenceGrass;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Fat\CoconutCream;
use App\Application\Entity\Sport\Fat\GratedCoconut;
use App\Application\Entity\Sport\Feculents\RawRice;
use App\Application\Entity\Sport\Legumes\Garlic;
use App\Application\Entity\Sport\Legumes\GreenBean;
use App\Application\Entity\Sport\Legumes\Mushroom;
use App\Application\Entity\Sport\Legumes\Oignon;
use App\Application\Entity\Sport\Legumes\Pepper;
use App\Application\Entity\Sport\Legumes\RawCarrot;
use App\Application\Entity\Sport\Legumes\Tomato;
use App\Application\Entity\Sport\Legumes\Zucchini;
use App\Application\Entity\Sport\Meat\Other\Eggs;
use App\Application\Entity\Sport\Meat\WhiteMeat\ChickenThigh;
use App\Application\Entity\Sport\Meat\WhiteMeat\RawChickenFillet;
use App\Application\Entity\Sport\Oil\CocoOil;
use App\Application\Entity\Sport\Oil\OliveOil;
use App\Application\Entity\Sport\Sauce\SojaSauce;

class ChickenCurryCoco extends HightCarbMenu
{

    private RawChickenFillet $rawChickenFillet;

    private CocoOil $cocoOil;

    private GreenBean $greenBean;

    private RawRice $rawRice;

    private RawCarrot $rawCarrot;

    private Salt $salt;

    private Eggs $eggs;

    private CoconutCream $coconutCream;

    private GratedCoconut $gratedCoconut;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Filet de poulet riz curry coco";
        $this->pathLogo = "chickenFilletRiceCurryCoco.png";
        $this->nameClass = "ChickenCurryCoco";
        $this->diet = ["normal"];
        $this->intolerance = ["eggs"];
        $this->setDefineNumberCaloriesTotalForMenuHightCarb();
        $this->rawChickenFillet = new RawChickenFillet($this->totalCalories * 0.22);
        $this->cocoOil = new CocoOil($this->totalCalories * 0.05);
        $this->greenBean = new GreenBean($this->totalCalories * 0.05);
        $this->rawRice = new RawRice($this->totalCalories * 0.22);
        $this->rawCarrot = new RawCarrot($this->totalCalories * 0.07);
        $this->salt = new Salt(0.0000001);
        $this->eggs = new Eggs($this->totalCalories * 0.12);
        $this->coconutCream = new CoconutCream($this->totalCalories * 0.15);
        $this->gratedCoconut = new GratedCoconut($this->totalCalories * 0.2);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->rawChickenFillet,
            $this->cocoOil,
            $this->greenBean,
            $this->rawRice,
            $this->rawCarrot,
            $this->salt,
            $this->eggs,
            $this->coconutCream,
            $this->gratedCoconut
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