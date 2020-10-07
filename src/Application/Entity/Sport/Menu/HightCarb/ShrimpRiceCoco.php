<?php


namespace App\Application\Entity\Sport\Menu\HightCarb;


use App\Application\Entity\Sport\Condiments\Coriander;
use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\Curry;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Fat\CocoMilk;
use App\Application\Entity\Sport\Fat\Nuts;
use App\Application\Entity\Sport\Feculents\RawRice;
use App\Application\Entity\Sport\Fish\Salmon;
use App\Application\Entity\Sport\Fish\Shrimp;
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

class ShrimpRiceCoco extends HightCarbMenu
{

    private Shrimp $shrimp;

    private RawRice $rawRice;

    private Zucchini $zucchini;

    private Oignon $oignon;

    private OliveOil $oliveOil;

    private CocoMilk $cocoMilk;

    private Salt $salt;

    private Curry $curry;

    private Coriander $coriander;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Crevettes au curry et lait de coco";
        $this->pathLogo = "shrimpRiceCoco.jpg";
        $this->nameClass = "ShrimpRiceCoco";
        $this->diet = ["normal"];
        $this->intolerance = ["crustacean"];
        $this->setDefineNumberCaloriesTotalForMenuHightCarb();
        $this->shrimp = new Shrimp($this->totalCalories * 0.23);
        $this->rawRice = new RawRice($this->totalCalories * 0.25);
        $this->zucchini = new Zucchini($this->totalCalories * 0.06);
        $this->oignon = new Oignon($this->totalCalories * 0.04);
        $this->oliveOil = new OliveOil($this->totalCalories * 0.07);
        $this->cocoMilk = new CocoMilk($this->totalCalories * 0.3);
        $this->salt = new Salt(0.0001);
        $this->curry = new Curry(0.0001);
        $this->coriander = new Coriander(0.0001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->shrimp,
            $this->rawRice,
            $this->zucchini,
            $this->oignon,
            $this->cocoMilk,
            $this->oliveOil,
            $this->salt,
            $this->curry,
            $this->coriander,
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