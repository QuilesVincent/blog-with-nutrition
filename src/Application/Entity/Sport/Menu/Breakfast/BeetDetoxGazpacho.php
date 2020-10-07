<?php


namespace App\Application\Entity\Sport\Menu\Breakfast;


use App\Application\Entity\Sport\Condiments\BalsamicVinegar;
use App\Application\Entity\Sport\Condiments\Mint;
use App\Application\Entity\Sport\Fat\Cheese\VegetablesCheese;
use App\Application\Entity\Sport\Legumes\Beet;
use App\Application\Entity\Sport\Legumes\Cucumber;
use App\Application\Entity\Sport\Other\TofouSoyeux;
use App\Application\Entity\Sport\Seeds\ChiaSeed;
use App\Application\Entity\Sport\Seeds\PumpkinSeed;

class BeetDetoxGazpacho extends BreakfastMenu
{

    private Beet $beet;

    private TofouSoyeux $tofouSoyeux;

    private Cucumber $cucumber;

    private ChiaSeed $chiaSeed;

    private VegetablesCheese $vegetablesCheese;

    private BalsamicVinegar $balsamicVinegar;

    private PumpkinSeed $pumpkingSeed;

    private Mint $mint;



    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Gazpacho détox à la betterave";
        $this->pathLogo = "beetDetoxGazpacho.jpg";
        $this->nameClass = "BeetDetoxGazpacho";
        $this->diet = ["vegetarian"];
        $this->setDefineNumberCaloriesTotalForBreakfast();
        $this->beet = new Beet($this->totalCalories * 0.35);
        $this->tofouSoyeux = new TofouSoyeux($this->totalCalories * 0.16);
        $this->cucumber = new Cucumber($this->totalCalories * 0.03);
        $this->chiaSeed = new ChiaSeed($this->totalCalories * 0.2);
        $this->vegetablesCheese = new VegetablesCheese($this->totalCalories * 0.11);
        $this->balsamicVinegar = new BalsamicVinegar(0.001);
        $this->pumpkingSeed = new PumpkinSeed($this->totalCalories * 0.12);
        $this->mint = new Mint(0.00001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->beet,
            $this->tofouSoyeux,
            $this->cucumber,
            $this->chiaSeed,
            $this->vegetablesCheese,
            $this->balsamicVinegar,
            $this->pumpkingSeed,
            $this->mint,
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