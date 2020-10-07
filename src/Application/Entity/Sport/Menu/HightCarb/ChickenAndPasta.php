<?php


namespace App\Application\Entity\Sport\Menu\HightCarb;


use App\Application\Entity\Sport\Feculents\RawPasta;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\PepperCondiment;
use App\Application\Entity\Sport\Condiments\ProvenceGrass;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Legumes\Garlic;
use App\Application\Entity\Sport\Legumes\Oignon;
use App\Application\Entity\Sport\Meat\WhiteMeat\ChickenThigh;
use App\Application\Entity\Sport\Oil\OliveOil;

class ChickenAndPasta extends HightCarbMenu
{

    private ChickenThigh $chickenThigh;

    private OliveOil $oliveOil;

    private Garlic $garlic;

    private ProvenceGrass $provenceGrass;

    private Origan $origan;

    private Salt $salt;

    private PepperCondiment $pepperCondiment;

    private Oignon $oignon;

    private RawPasta $rawPasta;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Cuisse de poulet et pasta (max 2 fois par semaine)";
        $this->pathLogo = "chickenAndPasta.jpg";
        $this->nameClass = "ChickenAndPasta";
        $this->diet = ["normal"];
        $this->intolerance = ["gluten"];
        $this->setDefineNumberCaloriesTotalForMenuHightCarb();
        $this->chickenThigh = new ChickenThigh($this->totalCalories * 0.62);
        $this->oliveOil = new OliveOil($this->totalCalories * 0.06);
        $this->garlic = new Garlic($this->totalCalories * 0.01);
        $this->provenceGrass = new ProvenceGrass($this->totalCalories * 0.0001);
        $this->origan = new Origan($this->totalCalories * 0.0001);
        $this->salt = new Salt(0.0000001);
        $this->pepperCondiment = new PepperCondiment(0.0000001);
        $this->oignon = new Oignon($this->totalCalories * 0.03);
        $this->rawPasta = new RawPasta($this->totalCalories * 0.41);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->chickenThigh,
            $this->oliveOil,
            $this->garlic,
            $this->provenceGrass,
            $this->origan,
            $this->salt,
            $this->pepperCondiment,
            $this->oignon,
            $this->rawPasta
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