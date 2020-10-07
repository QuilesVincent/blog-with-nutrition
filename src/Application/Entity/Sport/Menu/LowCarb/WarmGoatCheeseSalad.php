<?php


namespace App\Application\Entity\Sport\Menu\LowCarb;


use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\AppleVinegar;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\PepperCondiment;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Condiments\Thym;
use App\Application\Entity\Sport\Fat\Cheese\Goat;
use App\Application\Entity\Sport\Fat\Hazelnut;
use App\Application\Entity\Sport\Fat\Nuts;
use App\Application\Entity\Sport\Feculents\StrawberryJacket;
use App\Application\Entity\Sport\Fish\Salmon;
use App\Application\Entity\Sport\Fruits\Fig;
use App\Application\Entity\Sport\Legumes\CherryTomato;
use App\Application\Entity\Sport\Legumes\Garlic;
use App\Application\Entity\Sport\Legumes\GreenSalad;
use App\Application\Entity\Sport\Legumes\Mushroom;
use App\Application\Entity\Sport\Legumes\Oignon;
use App\Application\Entity\Sport\Legumes\Pepper;
use App\Application\Entity\Sport\Legumes\RawCarrot;
use App\Application\Entity\Sport\Legumes\Tomato;
use App\Application\Entity\Sport\Legumes\Zucchini;
use App\Application\Entity\Sport\Meat\Other\Eggs;
use App\Application\Entity\Sport\Meat\WhiteMeat\RawChickenFillet;
use App\Application\Entity\Sport\Oil\CocoOil;
use App\Application\Entity\Sport\Oil\OliveOil;
use App\Application\Entity\Sport\Sauce\SojaSauce;

class WarmGoatCheeseSalad extends LowCarbMenu
{

    private Goat $goat;

    private Fig $fig;

    private CherryTomato $cherryTomato;

    private GreenSalad $greenSalad;

    private Hazelnut $hazelnut;

    private OliveOil $oliveOil;

    private StrawberryJacket $strawberryJacket;

    private Salt $salt;

    private PepperCondiment $pepperCondiment;

    private AppleVinegar $goldenVinegar;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Salade de chèvre chaud et confiture de fraise";
        $this->pathLogo = "warmGoatCheeseSalad.jpg";
        $this->nameClass = "WarmGoatCheeseSalad";
        $this->diet = ["vegetarian"];
        $this->intolerance = ["nuts"];
        $this->setDefineNumberCaloriesTotalForMenuLowCarb();
        $this->goat = new Goat($this->totalCalories * 0.6);
        $this->fig = new Fig($this->totalCalories * 0.1);
        $this->cherryTomato = new CherryTomato($this->totalCalories * 0.08);
        $this->greenSalad = new GreenSalad($this->totalCalories * 0.05);
        $this->hazelnut = new Hazelnut($this->totalCalories * 0.3);
        $this->oliveOil = new OliveOil($this->totalCalories * 0.1);
        $this->strawberryJacket = new StrawberryJacket($this->totalCalories * 0.1);
        $this->salt = new Salt(0.0001);
        $this->pepperCondiment = new PepperCondiment(0.0001);
        $this->goldenVinegar = new AppleVinegar(0.0001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->goat,
            $this->fig,
            $this->cherryTomato,
            $this->greenSalad,
            $this->hazelnut,
            $this->oliveOil,
            $this->strawberryJacket,
            $this->salt,
            $this->pepperCondiment,
            $this->goldenVinegar
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