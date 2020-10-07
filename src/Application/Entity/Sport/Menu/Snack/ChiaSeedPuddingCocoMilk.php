<?php


namespace App\Application\Entity\Sport\Menu\Snack;


use App\Application\Entity\Sport\Fruits\FruitsRouges\Bluebbery;
use App\Application\Entity\Sport\Fruits\FruitsRouges\Raspberry;
use App\Application\Entity\Sport\Fat\CocoMilk;
use App\Application\Entity\Sport\Feculents\WholeSugar;
use App\Application\Entity\Sport\Seeds\ChiaSeed;
use App\Application\Entity\Sport\Tea\MatchaTea;

class ChiaSeedPuddingCocoMilk extends SnackMenu
{

    private CocoMilk $cocoMilk;

    private ChiaSeed $chiaSeed;

    private WholeSugar $wholeSugar;

    private MatchaTea $matchaTea;

    private Raspberry $raspberry;

    private Bluebbery $bluebbery;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Pudding de graines de chia, lait de coco et thé matcha";
        $this->pathLogo = "chiaSeedPuddingCocoMilk.jpg";
        $this->nameClass = "ChiaSeedPuddingCocoMilk";
        $this->diet = ["vegetarian"];
        $this->setDefineNumberCaloriesTotalForSnack();
        $this->cocoMilk = new CocoMilk($this->totalCalories * 0.3);
        $this->chiaSeed = new ChiaSeed($this->totalCalories * 0.35);
        $this->wholeSugar = new WholeSugar($this->totalCalories * 0.15);
        $this->matchaTea = new MatchaTea(0.00001);
        $this->raspberry = new Raspberry($this->totalCalories * 0.1);
        $this->bluebbery = new Bluebbery($this->totalCalories * 0.1);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->cocoMilk,
            $this->chiaSeed,
            $this->wholeSugar,
            $this->matchaTea,
            $this->raspberry,
            $this->bluebbery
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