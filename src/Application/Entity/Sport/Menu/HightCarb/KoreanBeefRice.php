<?php


namespace App\Application\Entity\Sport\Menu\HightCarb;


use App\Application\Entity\Sport\Meat\RedMeat\RawRedMeat5;
use App\Application\Entity\Sport\Condiments\Ginger;
use App\Application\Entity\Sport\Condiments\AppleVinegar;
use App\Application\Entity\Sport\Condiments\SrirachaSauce;
use App\Application\Entity\Sport\Feculents\GreedyPeas;
use App\Application\Entity\Sport\Feculents\RawRice;
use App\Application\Entity\Sport\Feculents\WholeSugar;
use App\Application\Entity\Sport\Legumes\Garlic;
use App\Application\Entity\Sport\Legumes\Oignon;
use App\Application\Entity\Sport\Legumes\RedOignon;
use App\Application\Entity\Sport\Oil\SesameOil;
use App\Application\Entity\Sport\Sauce\SojaSauce;
use App\Application\Entity\Sport\Seeds\SesameSeed;

class KoreanBeefRice extends HightCarbMenu
{

    private GreedyPeas $greedyPeas;

    private RawRedMeat5 $rawRedMeat5;

    private Garlic $garlic;

    private Oignon $oignon;

    private Ginger $ginger;

    private SesameOil $sesameOil;

    private SojaSauce $sojaSauce;

    private SrirachaSauce $srirachaSauces;

    private AppleVinegar $appleVinegear;

    private WholeSugar $wholeSugar;

    private RawRice $rawRice;

    private RedOignon $redOignon;

    private SesameSeed $sesameSeed;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Boeuf à la coréenne accompagné de son riz et de ses légumes";
        $this->pathLogo = "koreanBeefRice.jpg";
        $this->nameClass = "KoreanBeefRice";
        $this->diet = ["normal", "redMeat"];
        $this->intolerance = ["soja", "peanut", "sesame"];
        $this->setDefineNumberCaloriesTotalForMenuHightCarb();
        $this->greedyPeas = new GreedyPeas($this->totalCalories * 0.1);
        $this->rawRedMeat5 = new RawRedMeat5($this->totalCalories * 0.3);
        $this->garlic = new Garlic($this->totalCalories * 0.04);
        $this->oignon = new Oignon($this->totalCalories * 0.03);
        $this->ginger = new Ginger(0.0001);
        $this->sesameOil = new SesameOil($this->totalCalories * 0.1);
        $this->sojaSauce = new SojaSauce($this->totalCalories * 0.05);
        $this->srirachaSauces = new SrirachaSauce(0.0001);
        $this->appleVinegear = new AppleVinegar(0.0001);
        $this->wholeSugar = new WholeSugar($this->totalCalories * 0.07);
        $this->rawRice = new RawRice($this->totalCalories * 0.22);
        $this->redOignon = new RedOignon($this->totalCalories * 0.03);
        $this->sesameSeed = new SesameSeed($this->totalCalories * 0.1);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->greedyPeas,
            $this->rawRedMeat5,
            $this->garlic,
            $this->oignon,
            $this->ginger,
            $this->sesameOil,
            $this->sojaSauce,
            $this->srirachaSauces,
            $this->appleVinegear,
            $this->wholeSugar,
            $this->rawRice,
            $this->redOignon,
            $this->sesameSeed
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