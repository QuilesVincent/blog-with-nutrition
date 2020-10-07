<?php


namespace App\Application\Entity\Sport\Menu\Snack;


use App\Application\Entity\Human;
use App\Application\Entity\Sport\Condiments\FoodBicarbonate;
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
use App\Application\Entity\Sport\Meat\Other\Eggs;
use App\Application\Entity\Sport\Milk\AlmondMilk;
use App\Application\Entity\Sport\Sugar\Natural\Honey;

class VeganCreamMangoBananCardamom extends SnackMenu
{

    private Mango $mango;

    private Banane $banane;

    private SoyCream $soyCream;

    private Cardamom $cardamom;

    private Vanilla $vanilla;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Crème vegan Cardamon Banane et Mangue";
        $this->pathLogo = "veganCreamMangoBananCardamom.jpg";
        $this->nameClass = "VeganCreamMangoBananCardamom";
        $this->diet = ["vegan", "vegetarian"];
        $this->intolerance = ["soja"];
        $this->setDefineNumberCaloriesTotalForSnack();
        $this->mango = new Mango($this->totalCalories * 0.35);
        $this->banane = new Banane($this->totalCalories * 0.3);
        $this->soyCream = new SoyCream($this->totalCalories * 0.2);
        $this->cardamom = new Cardamom($this->totalCalories * 0.15);
        $this->vanilla = new Vanilla(0.00001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->mango,
            $this->banane,
            $this->soyCream,
            $this->cardamom,
            $this->vanilla
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