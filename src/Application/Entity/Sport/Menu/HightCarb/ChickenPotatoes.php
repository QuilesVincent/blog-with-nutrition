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
use App\Application\Entity\Sport\Fat\Nuts;
use App\Application\Entity\Sport\Feculents\RawRice;
use App\Application\Entity\Sport\Feculents\SweetPotatoes;
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
use App\Application\Entity\Sport\Meat\WhiteMeat\ChickenThigh;
use App\Application\Entity\Sport\Meat\WhiteMeat\RawChickenFillet;
use App\Application\Entity\Sport\Oil\CocoOil;
use App\Application\Entity\Sport\Oil\OliveOil;
use App\Application\Entity\Sport\Sauce\SojaSauce;
use App\Application\Entity\Sport\Sugar\Natural\Honey;

class ChickenPotatoes extends HightCarbMenu
{

    private RawChickenFillet $rawChickenFillet;

    private Honey $honey;

    private OliveOil $oliveOil;

    private SweetPotatoes $sweetPotatoes;

    private GreenSalad $greenSalad;

    private Oignon $oignon;

    private Tomato $tomato;

    private Nuts $nuts;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "poulet et frite";
        $this->pathLogo = "chickenPotatoes.jpg";
        $this->nameClass = "ChickenPotatoes";
        $this->diet = ["normal"];
        $this->intolerance = ["nuts"];
        $this->setDefineNumberCaloriesTotalForMenuHightCarb();
        $this->rawChickenFillet = new RawChickenFillet($this->totalCalories * 0.3);
        $this->honey = new Honey($this->totalCalories * 0.07);
        $this->oliveOil = new OliveOil($this->totalCalories * 0.07);
        $this->sweetPotatoes = new SweetPotatoes($this->totalCalories * 0.3);
        $this->greenSalad = new GreenSalad($this->totalCalories * 0.02);
        $this->oignon = new Oignon($this->totalCalories * 0.02);
        $this->tomato = new Tomato($this->totalCalories * 0.03);
        $this->nuts = new Nuts($this->totalCalories * 0.25);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->rawChickenFillet,
            $this->honey,
            $this->oliveOil,
            $this->sweetPotatoes,
            $this->greenSalad,
            $this->oignon,
            $this->tomato,
            $this->nuts,
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