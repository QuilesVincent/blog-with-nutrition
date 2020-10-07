<?php


namespace App\Application\Entity\Sport\Menu\LowCarb;


use App\Application\Entity\Sport\Meat\WhiteMeat\RawTurkeyEscalope;
use App\Application\Entity\Sport\Condiments\ChilliPepperCondiment;
use App\Application\Entity\Sport\Condiments\Curcuma;
use App\Application\Entity\Sport\Condiments\PepperCondiment;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Condiments\Thym;
use App\Application\Entity\Sport\Condiments\VegetableBroth;
use App\Application\Entity\Sport\Fat\ClarifiedButter;
use App\Application\Entity\Sport\Legumes\ArtichokeHeart;
use App\Application\Entity\Sport\Legumes\Garlic;
use App\Application\Entity\Sport\Legumes\GreenBean;
use App\Application\Entity\Sport\Legumes\Oignon;
use App\Application\Entity\Sport\Legumes\RawCarrot;
use App\Application\Entity\Sport\Oil\OliveOil;

class SauteedTurkeyWithArtichokeHeart extends LowCarbMenu
{

    private RawTurkeyEscalope $rawTurkeyEscalope;

    private Garlic $garlic;

    private Thym $thym;

    private Oignon $oignon;

    private GreenBean $greenBean;

    private RawCarrot $rowCarrot;

    private ArtichokeHeart $artichokeHeart;

    private ClarifiedButter $clarifiedButter;

    private VegetableBroth $vegetableBroth;

    private Curcuma $curcuma;

    private ChilliPepperCondiment $chilliPepperCondiment;

    private OliveOil $oliveOil;

    private Salt $salt;

    private PepperCondiment $pepperCondiment;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Sauté de dinde aux coeur d'artichaud";
        $this->pathLogo = "sauteedTurkeyWithArtichokeHeart.jpg";
        $this->nameClass = "SauteedTurkeyWithArtichokeHeart";
        $this->diet = ["normal"];
        $this->setDefineNumberCaloriesTotalForMenuLowCarb();
        $this->rawTurkeyEscalope = new RawTurkeyEscalope($this->totalCalories * 0.4);
        $this->garlic = new Garlic($this->totalCalories * 0.04);
        $this->thym = new Thym(0.00001);
        $this->oignon = new Oignon($this->totalCalories * 0.05);
        $this->greenBean = new GreenBean($this->totalCalories * 0.1);
        $this->rowCarrot = new RawCarrot($this->totalCalories * 0.1);
        $this->artichokeHeart = new ArtichokeHeart($this->totalCalories * 0.05);
        $this->clarifiedButter = new ClarifiedButter($this->totalCalories * 0.13);
        $this->vegetableBroth = new VegetableBroth(0.00001);
        $this->curcuma = new Curcuma(0.00001);
        $this->chilliPepperCondiment = new ChilliPepperCondiment(0.00001);
        $this->oliveOil = new OliveOil($this->totalCalories * 0.1);
        $this->salt = new Salt(0.00001);
        $this->pepperCondiment = new PepperCondiment(0.00001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->rawTurkeyEscalope,
            $this->garlic,
            $this->thym,
            $this->oignon,
            $this->greenBean,
            $this->rowCarrot,
            $this->artichokeHeart,
            $this->clarifiedButter,
            $this->vegetableBroth,
            $this->curcuma,
            $this->chilliPepperCondiment,
            $this->oliveOil,
            $this->salt,
            $this->pepperCondiment
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