<?php


namespace App\Application\Entity\Sport\Menu\HightCarb;


use App\Application\Entity\Feculents\RawPasta;
use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\Mint;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\PepperCondiment;
use App\Application\Entity\Sport\Condiments\ProvenceGrass;
use App\Application\Entity\Sport\Condiments\RedChiliPowder;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Fat\CoconutCream;
use App\Application\Entity\Sport\Fat\GratedCoconut;
use App\Application\Entity\Sport\Feculents\ApricotJacket;
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

class ChickenApricot extends HightCarbMenu
{

    private RawChickenFillet $rawChickenFillet;

    private ApricotJacket $apricotJacket;

    private CocoOil $cocoOil;

    private SojaSauce $sojaSauce;

    private RawRice $rawRice;

    private Salt $salt;

    private PepperCondiment $pepperCondiment;

    private RedChiliPowder $redChiliPowder;

    private Mint $mint;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Poulet à l'abricot accompagné de son riz";
        $this->pathLogo = "chickenApricot.jpg";
        $this->nameClass = "ChickenApricot";
        $this->diet = ["normal"];
        $this->intolerance = ["soja"];
        $this->setDefineNumberCaloriesTotalForMenuHightCarb();
        $this->rawChickenFillet = new RawChickenFillet($this->totalCalories * 0.3);
        $this->apricotJacket = new ApricotJacket($this->totalCalories * 0.1);
        $this->cocoOil = new CocoOil($this->totalCalories * 0.07);
        $this->sojaSauce = new SojaSauce($this->totalCalories * 0.03);
        $this->rawRice = new RawRice($this->totalCalories * 0.35);
        $this->salt = new Salt(0.0000001);
        $this->pepperCondiment = new PepperCondiment(0.0000001);
        $this->redChiliPowder = new RedChiliPowder(0.0000001);
        $this->mint = new Mint(0.0000001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->rawChickenFillet,
            $this->apricotJacket,
            $this->cocoOil,
            $this->sojaSauce,
            $this->rawRice,
            $this->salt,
            $this->pepperCondiment,
            $this->redChiliPowder,
            $this->mint
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