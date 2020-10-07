<?php


namespace App\Application\Entity\Sport\Menu\HightCarb;


use App\Application\Entity\Sport\Meat\RedMeat\RawRedMeat5;
use App\Application\Entity\Sport\Condiments\Basilic;
use App\Application\Entity\Sport\Condiments\ChiliPepperSauce;
use App\Application\Entity\Sport\Condiments\GreenLemon;
use App\Application\Entity\Sport\Condiments\LemongrassStick;
use App\Application\Entity\Sport\Condiments\Mint;
use App\Application\Entity\Sport\Condiments\NuocMamSauce;
use App\Application\Entity\Sport\Fat\CashewNuts;
use App\Application\Entity\Sport\Feculents\RawRiceTagliatelle;
use App\Application\Entity\Sport\Legumes\GreenSalad;
use App\Application\Entity\Sport\Legumes\RawCarrot;

class BoBun extends HightCarbMenu
{

    private RawRedMeat5 $rawRedMeat5;

    private RawRiceTagliatelle $rawRiceTagliatelle;

    private GreenSalad $greenSalad;

    private Basilic $basilic;

    private LemongrassStick $lemongrassStick;

    private Mint $mint;

    private RawCarrot $rawCarrot;

    private GreenLemon $greenLemon;

    private ChiliPepperSauce $chiliPepperSauce;

    private NuocMamSauce $nuocMamSauce;

    private CashewNuts $cashewNuts;


    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Le fameux Bo Bun";
        $this->pathLogo = "boBun.jpg";
        $this->nameClass = "BoBun";
        $this->diet = ["normal", "redMeat"];
        $this->setDefineNumberCaloriesTotalForMenuHightCarb();
        $this->rawRedMeat5 = new RawRedMeat5($this->totalCalories * 0.3);
        $this->rawRiceTagliatelle = new RawRiceTagliatelle($this->totalCalories * 0.4);
        $this->greenSalad = new GreenSalad($this->totalCalories * 0.04);
        $this->basilic = new Basilic(0.0001);
        $this->lemongrassStick = new LemongrassStick(0.0001);
        $this->mint = new Mint(0.0001);
        $this->rawCarrot = new RawCarrot(0.00001);
        $this->greenLemon = new GreenLemon(0.0001);
        $this->chiliPepperSauce = new ChiliPepperSauce(0.0001);
        $this->nuocMamSauce = new NuocMamSauce(0.0001);
        $this->cashewNuts = new CashewNuts($this->totalCalories * 0.15);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->rawRedMeat5,
            $this->rawRiceTagliatelle,
            $this->greenSalad,
            $this->basilic,
            $this->lemongrassStick,
            $this->mint,
            $this->rawCarrot,
            $this->greenLemon,
            $this->chiliPepperSauce,
            $this->nuocMamSauce,
            $this->cashewNuts
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