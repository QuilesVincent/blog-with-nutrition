<?php


namespace App\Application\Entity\Sport\Menu\LowCarb;


use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Legumes\Garlic;
use App\Application\Entity\Sport\Legumes\Mushroom;
use App\Application\Entity\Sport\Legumes\Oignon;
use App\Application\Entity\Sport\Legumes\Pepper;
use App\Application\Entity\Sport\Legumes\Tomato;
use App\Application\Entity\Sport\Legumes\TomatoCoulis;
use App\Application\Entity\Sport\Legumes\Zucchini;
use App\Application\Entity\Sport\Meat\WhiteMeat\RawChickenFillet;
use App\Application\Entity\Sport\Oil\CocoOil;
use App\Application\Entity\Sport\Sauce\SojaSauce;

class PepperChicken extends LowCarbMenu
{

    private Pepper $pepper;

    private CocoOil $cocoOil;

    private RawChickenFillet $rawChickenFilet;

    private Oignon $oignon;

    private Mushroom $mushroom;

    private Cumin $cumin;

    private Garlic $garlic;

    private SojaSauce $sojaSauce;

    private Tomato $tomato;

    private Zucchini $zucchini;

    private TomatoCoulis $tomatoCoulis;

    private Origan $origan;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Poivrons farci au poulet";
        $this->pathLogo = "pepperChicken.jpg";
        $this->nameClass = "PepperChicken";
        $this->diet = ["normal"];
        $this->intolerance = ["soja"];
        $this->setDefineNumberCaloriesTotalForMenuLowCarb();
        $this->pepper = new Pepper($this->totalCalories * 0.1);
        $this->cocoOil = new CocoOil($this->totalCalories * 0.12);
        $this->rawChickenFilet = new RawChickenFillet($this->totalCalories * 0.45);
        $this->oignon = new Oignon($this->totalCalories * 0.05);
        $this->mushroom = new Mushroom($this->totalCalories * 0.07);
        $this->cumin = new Cumin(0.0000001);
        $this->garlic = new Garlic($this->totalCalories * 0.03);
        $this->sojaSauce = new SojaSauce($this->totalCalories * 0.03);
        $this->tomato = new Tomato($this->totalCalories * 0.05);
        $this->zucchini = new Zucchini($this->totalCalories * 0.06);
        $this->tomatoCoulis = new TomatoCoulis($this->totalCalories * 0.03);
        $this->origan = new Origan(0.0000001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->pepper,
            $this->cocoOil,
            $this->rawChickenFilet,
            $this->oignon,
            $this->mushroom,
            $this->cumin,
            $this->garlic,
            $this->sojaSauce,
            $this->tomato,
            $this->zucchini,
            $this->tomatoCoulis,
            $this->origan];
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