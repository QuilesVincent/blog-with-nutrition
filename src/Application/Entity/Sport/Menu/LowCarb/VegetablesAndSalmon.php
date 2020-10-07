<?php


namespace App\Application\Entity\Sport\Menu\LowCarb;


use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\PepperCondiment;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Condiments\Thym;
use App\Application\Entity\Sport\Fat\Nuts;
use App\Application\Entity\Sport\Fish\Salmon;
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

class VegetablesAndSalmon extends LowCarbMenu
{

    private Zucchini $zucchini;

    private Salmon $salmon;

    private Mushroom $mushRoom;

    private CherryTomato $cherryTomato;

    private Garlic $garlic;

    private LemonJuice $lemonJuice;

    private CocoOil $cocoOil;

    private Thym $thym;

    private Salt $salt;

    private PepperCondiment $pepperCondiment;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Saumon aux légumes";
        $this->pathLogo = "vegetablesAndSalmon.jpg";
        $this->nameClass = "VegetablesAndSalmon";
        $this->diet = ["normal", "fish"];
        $this->setDefineNumberCaloriesTotalForMenuLowCarb();
        $this->zucchini = new Zucchini($this->totalCalories * 0.07);
        $this->salmon = new Salmon($this->totalCalories * 0.72);
        $this->mushRoom = new Mushroom($this->totalCalories * 0.08);
        $this->cherryTomato = new CherryTomato($this->totalCalories * 0.07);
        $this->garlic = new Garlic($this->totalCalories * 0.05);
        $this->lemonJuice = new LemonJuice(0.0000001);
        $this->cocoOil = new CocoOil(0.0000001);
        $this->thym = new Thym(0.01);
        $this->salt = new Salt(0.0001);
        $this->pepperCondiment = new PepperCondiment(0.0001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->zucchini,
            $this->salmon,
            $this->mushRoom,
            $this->cherryTomato,
            $this->garlic,
            $this->lemonJuice,
            $this->cocoOil,
            $this->thym,
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