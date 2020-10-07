<?php


namespace App\Application\Entity\Sport\Menu\LowCarb;


use App\Application\Entity\Sport\Condiments\Curry;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Fat\CashewNuts;
use App\Application\Entity\Sport\Fat\CocoMilk;
use App\Application\Entity\Sport\Fat\Nuts;
use App\Application\Entity\Sport\Fat\PowderedNutmeg;
use App\Application\Entity\Sport\Legumes\RawCarrot;
use App\Application\Entity\Sport\Legumes\Spinach;
use App\Application\Entity\Sport\Meat\Other\CottageCheese0;
use App\Application\Entity\Sport\Meat\Other\EggsWhites;
use App\Application\Entity\Sport\Oil\CocoOil;

class SpinachSouffle extends LowCarbMenu
{

    private Spinach $spinach;

    private CottageCheese0 $cottageCheese0;

    private PowderedNutmeg $powderedNutmeg;

    private EggsWhites $eggsWhites;

    private Salt $salt;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Soufflé aux épinards";
        $this->pathLogo = "spinachSouffle.jpeg";
        $this->nameClass = "SpinachSouffle";
        $this->diet = ["normal"];
        $this->intolerance = ["nuts", "milk"];
        $this->setDefineNumberCaloriesTotalForMenuLowCarb();
        $this->spinach = new Spinach($this->totalCalories * 0.15);
        $this->cottageCheese0 = new CottageCheese0($this->totalCalories * 0.1);
        $this->powderedNutmeg = new PowderedNutmeg($this->totalCalories * 0.35);
        $this->eggsWhites = new EggsWhites($this->totalCalories * 0.1);
        $this->salt = new Salt(0.001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->spinach,
            $this->cottageCheese0,
            $this->powderedNutmeg,
            $this->eggsWhites,
            $this->salt
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