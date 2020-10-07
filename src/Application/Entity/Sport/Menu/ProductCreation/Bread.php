<?php


namespace App\Application\Entity\Sport\Menu\ProductCreation;


use App\Application\Entity\Human;
use App\Application\Entity\Sport\Condiments\FoodBicarbonate;
use App\Application\Entity\Sport\Condiments\LemonJuice;
use App\Application\Entity\Sport\Condiments\Vanilla;
use App\Application\Entity\Sport\Fat\AlmondButter;
use App\Application\Entity\Sport\Fat\Avocado;
use App\Application\Entity\Sport\Fat\BlackChocolate;
use App\Application\Entity\Sport\Fat\SoyCream;
use App\Application\Entity\Sport\Feculents\Cacaco;
use App\Application\Entity\Sport\Feculents\Cardamom;
use App\Application\Entity\Sport\Feculents\OatBran;
use App\Application\Entity\Sport\Feculents\OatMeal;
use App\Application\Entity\Sport\Fruits\Apple;
use App\Application\Entity\Sport\Fruits\Banane;
use App\Application\Entity\Sport\Fruits\Mango;
use App\Application\Entity\Sport\Meat\Other\CottageCheese0;
use App\Application\Entity\Sport\Meat\Other\Eggs;
use App\Application\Entity\Sport\Menu;
use App\Application\Entity\Sport\Milk\AlmondMilk;
use App\Application\Entity\Sport\Seeds\ChiaSeed;
use App\Application\Entity\Sport\Seeds\SesameSeed;
use App\Application\Entity\Sport\Seeds\SunflowerSeed;
use App\Application\Entity\Sport\Sugar\Natural\Honey;

class Bread extends ProductCreationRecipe
{

    private OatBran $oatBran;

    private Eggs $eggs;

    private CottageCheese0 $cottageCheese0;

    private SesameSeed $sesameSeed;

    private FoodBicarbonate $foodBicarbonate;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Pain healthy";
        $this->pathLogo = "bread.jpg";
        $this->nameClass = "Bread";
        $this->diet = ["normal"];
        $this->oatBran = new OatBran(60);
        $this->eggs = new Eggs(155);
        $this->cottageCheese0 = new CottageCheese0(13);
        $this->sesameSeed = new SesameSeed(30);
        $this->foodBicarbonate = new FoodBicarbonate(0.00001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->oatBran,
            $this->eggs,
            $this->cottageCheese0,
            $this->sesameSeed,
            $this->foodBicarbonate
        ];
    }



    public function setExplication(): void
    {
        $this->explication = [
            'Mélanger le son d\'avoine, 1 oeuf, 1 blanc d\'oeuf (garder le jaune), le fromage blanc.',
            'Concasser les noisettes, les incorporer avec la portion de graines (exemple : tournesol)',
            'Huiler légèrement à l\'huile de coco le gaufrier afin d\'éviter aux gaufres de coller. Etaler la pâte uniformément sans trop en mettre afin de ne pas faire déborder à la cuisson.',
            'Mélanger le tout avec une légère touche de bicarbonate de soude et 1/4 de sachet de levure (possibilité d\'aérer le pain avec de la gomme de guar).'
        ];
    }

}