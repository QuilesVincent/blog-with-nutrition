<?php


namespace App\Application\Entity\Sport\Menu\LowCarb;


use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Fat\CocoMilk;
use App\Application\Entity\Sport\Fat\Nuts;
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

class ChickenCocoMilk extends LowCarbMenu
{

    private RawChickenFillet $rawChickenFillet;

    private OliveOil $oliveOil;

    private CocoMilk $cocoMilk;

    private SojaSauce $sojaSauce;

    private Mushroom $mushroom;

    private RawCarrot $rawCarrot;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Aiguillette de poulet au lait de coco";
        $this->pathLogo = "aiguilletteChickenCocoMilk.jpg";
        $this->nameClass = "ChickenCocoMilk";
        $this->diet = ["normal"];
        $this->intolerance = ["soja"];
        $this->setDefineNumberCaloriesTotalForMenuLowCarb();
        $this->rawChickenFillet = new RawChickenFillet($this->totalCalories * 0.4);
        $this->oliveOil = new OliveOil($this->totalCalories * 0.1);
        $this->cocoMilk = new CocoMilk($this->totalCalories * 0.35);
        $this->sojaSauce = new SojaSauce($this->totalCalories * 0.03);
        $this->mushroom = new Mushroom($this->totalCalories * 0.07);
        $this->rawCarrot = new RawCarrot($this->totalCalories * 0.1);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->rawChickenFillet,
            $this->cocoMilk,
            $this->oliveOil,
            $this->sojaSauce,
            $this->mushroom,
            $this->rawCarrot,
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