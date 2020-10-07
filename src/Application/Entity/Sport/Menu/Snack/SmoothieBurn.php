<?php


namespace App\Application\Entity\Sport\Menu\Snack;


use App\Application\Entity\Human;
use App\Application\Entity\Sport\Condiments\Curcuma;
use App\Application\Entity\Sport\Condiments\FoodBicarbonate;
use App\Application\Entity\Sport\Condiments\Ginger;
use App\Application\Entity\Sport\Condiments\GreenLemon;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Vanilla;
use App\Application\Entity\Sport\Fat\Avocado;
use App\Application\Entity\Sport\Fat\SoyCream;
use App\Application\Entity\Sport\Feculents\Cacaco;
use App\Application\Entity\Sport\Feculents\Cardamom;
use App\Application\Entity\Sport\Feculents\OatMeal;
use App\Application\Entity\Sport\Fruits\Apple;
use App\Application\Entity\Sport\Fruits\Banane;
use App\Application\Entity\Sport\Fruits\Mango;
use App\Application\Entity\Sport\Legumes\Kale;
use App\Application\Entity\Sport\Legumes\RawCarrot;
use App\Application\Entity\Sport\Meat\Other\Eggs;
use App\Application\Entity\Sport\Milk\AlmondMilk;
use App\Application\Entity\Sport\Sugar\Natural\Honey;

class SmoothieBurn extends SnackMenu
{

    private RawCarrot $rawCarrot;

    private Kale $kale;

    private GreenLemon $greenLemon;

    private Ginger $ginger;

    private Curcuma $curcuma;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Smoothie brûle graisse";
        $this->pathLogo = "smoothieBurn.jpg";
        $this->nameClass = "SmoothieBurn";
        $this->diet = ["vegetarian"];
        $this->setDefineNumberCaloriesTotalForSnack();
        $this->rawCarrot = new RawCarrot($this->totalCalories * 0.5);
        $this->kale = new Kale($this->totalCalories * 0.2);
        $this->greenLemon = new GreenLemon(0.00001);
        $this->ginger = new Ginger(0.00001);
        $this->curcuma = new Curcuma(0.00001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->rawCarrot,
            $this->kale,
            $this->greenLemon,
            $this->ginger,
            $this->curcuma
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