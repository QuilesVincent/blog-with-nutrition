<?php


namespace App\Application\Entity\Sport\Menu\WeekRecipe;


use App\Application\Entity\Sport\Fruits\FruitsRouges\Raspberry;
use App\Application\Entity\Sport\Fruits\FruitsRouges\Strawberry;
use App\Application\Entity\Sport\Condiments\Rhubarb;
use App\Application\Entity\Sport\Feculents\GranolaMix;
use App\Application\Entity\Sport\Feculents\MapleSyrup;
use App\Application\Entity\Sport\Menu\Breakfast\BreakfastMenu;
use App\Application\Entity\Sport\Other\GreekYogourt;

class FruityGranolaVerrines extends BreakfastMenu
{

    private Rhubarb $rhubarb;

    private Raspberry $raspberry;

    private MapleSyrup $mapleSyrup;

    private GranolaMix $granolaMix;

    private GreekYogourt $greekYogourt;

    private Strawberry $strawberry;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Verrines fruitées au granola et yaourt";
        $this->pathLogo = "fruityGranolaVerrines.jpg";
        $this->nameClass = "FruityGranolaVerrines";
        $this->diet = ["vegetarian"];
        $this->intolerance = ["milk", "peanut"];
        $this->setDefineNumberCaloriesTotalForBreakfast();
        $this->rhubarb = new Rhubarb(0.0001);
        $this->raspberry = new Raspberry($this->totalCalories * 0.1);
        $this->mapleSyrup = new MapleSyrup($this->totalCalories * 0.1);
        $this->granolaMix = new GranolaMix($this->totalCalories * 0.3);
        $this->greekYogourt = new GreekYogourt($this->totalCalories * 0.1);
        $this->strawberry = new Strawberry($this->totalCalories * 0.07);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();

    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->rhubarb,
            $this->raspberry,
            $this->mapleSyrup,
            $this->granolaMix,
            $this->greekYogourt,
            $this->strawberry
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