<?php


namespace App\Application\Entity\Sport\Menu\HightCarb;


use App\Application\Entity\Sport\Feculents\RawPasta;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Fat\Cheese\ParmigianoReggiano;
use App\Application\Entity\Sport\Fat\SoyCream;
use App\Application\Entity\Sport\Legumes\Garlic;
use App\Application\Entity\Sport\Legumes\GreenAsparagus;
use App\Application\Entity\Sport\Legumes\TomatoConfit;

class PastaAndGreenAsparagus extends HightCarbMenu
{

    private SoyCream $soyCream;

    private RawPasta $rawPasta;

    private ParmigianoReggiano $parmigianoReggiano;

    private GreenAsparagus $greenAsparagus;

    private TomatoConfit $tomatoConfit;

    private Garlic $garlic;

    private Salt $salt;


    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Tagliatelles aux asperges vertes";
        $this->pathLogo = "pastaAndGeenAsparagus.jpg";
        $this->nameClass = "PastaAndGreenAsparagus";
        $this->diet = ["vegetarian"];
        $this->intolerance = ["gluten", "soja"];
        $this->setDefineNumberCaloriesTotalForMenuHightCarb();
        $this->soyCream = new SoyCream($this->totalCalories * 0.14);
        $this->rawPasta = new RawPasta($this->totalCalories * 0.35);
        $this->parmigianoReggiano = new ParmigianoReggiano($this->totalCalories * 0.35);
        $this->greenAsparagus = new GreenAsparagus($this->totalCalories * 0.05);
        $this->tomatoConfit = new TomatoConfit($this->totalCalories * 0.05);
        $this->garlic = new Garlic($this->totalCalories * 0.02);
        $this->salt = new Salt(0.00001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->soyCream,
            $this->rawPasta,
            $this->parmigianoReggiano,
            $this->greenAsparagus,
            $this->tomatoConfit,
            $this->garlic,
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