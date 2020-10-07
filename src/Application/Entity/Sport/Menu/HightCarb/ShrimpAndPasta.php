<?php


namespace App\Application\Entity\Sport\Menu\HightCarb;


use App\Application\Entity\Sport\Feculents\RawPasta;
use App\Application\Entity\Sport\Condiments\Basilic;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Thym;
use App\Application\Entity\Sport\Fat\ClarifiedButter;
use App\Application\Entity\Sport\Fat\SoyCream;
use App\Application\Entity\Sport\Feculents\WholeSugar;
use App\Application\Entity\Sport\Fish\Shrimp;
use App\Application\Entity\Sport\Legumes\CherryTomato;

class ShrimpAndPasta extends HightCarbMenu
{

    private Shrimp $shrimp;

    private SoyCream $soyCream;

    private RawPasta $rawPasta;

    private CherryTomato $cherryTomato;

    private LemonJuice $lemonJuice;

    private WholeSugar $wholeSugar;

    private ClarifiedButter $clarifiedButter;

    private Thym $thym;

    private Basilic $basilic;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Tagliatelles aux crevettes";
        $this->pathLogo = "shrimpAndPasta.jpg";
        $this->nameClass = "ShrimpAndPasta";
        $this->diet = ["normal"];
        $this->intolerance = ["gluten", "peanut", "crustacean"];
        $this->setDefineNumberCaloriesTotalForMenuHightCarb();
        $this->shrimp = new Shrimp($this->totalCalories * 0.3);
        $this->soyCream = new SoyCream($this->totalCalories * 0.1);
        $this->rawPasta = new RawPasta($this->totalCalories * 0.35);
        $this->cherryTomato = new CherryTomato($this->totalCalories * 0.06);
        $this->lemonJuice = new LemonJuice(0.00001);
        $this->wholeSugar = new WholeSugar($this->totalCalories * 0.05);
        $this->clarifiedButter = new ClarifiedButter($this->totalCalories * 0.1);
        $this->thym = new Thym(0.00001);
        $this->basilic = new Basilic(0.00001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->shrimp,
            $this->soyCream,
            $this->rawPasta,
            $this->cherryTomato,
            $this->lemonJuice,
            $this->wholeSugar,
            $this->clarifiedButter,
            $this->thym,
            $this->basilic
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