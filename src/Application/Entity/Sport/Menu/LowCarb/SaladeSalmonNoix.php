<?php


namespace App\Application\Entity\Sport\Menu\LowCarb;


use App\Application\Entity\Sport\Condiments\Cumin;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Fat\Nuts;
use App\Application\Entity\Sport\Fish\Salmon;
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

class SaladeSalmonNoix extends LowCarbMenu
{

    private GreenSalad $greenSalad;

    private Salmon $salmon;

    private Eggs $eggs;

    private Nuts $nuts;

    private RawCarrot $rawCarrot;

    private OliveOil $oliveOil;

    private Cumin $cumin;

    private Garlic $garlic;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Salade saumon aux noix";
        $this->pathLogo = "saladeSalmonNuts.jpg";
        $this->nameClass = "SaladeSalmonNoix";
        $this->diet = ["normal", "fish"];
        $this->intolerance = ["eggs", "nuts"];
        $this->setDefineNumberCaloriesTotalForMenuLowCarb();
        $this->greenSalad = new GreenSalad($this->totalCalories * 0.03);
        $this->salmon = new Salmon($this->totalCalories * 0.3);
        $this->eggs = new Eggs($this->totalCalories * 0.24);
        $this->nuts = new Nuts($this->totalCalories * 0.4);
        $this->rawCarrot = new RawCarrot($this->totalCalories * 0.1);
        $this->oliveOil = new OliveOil($this->totalCalories * 0.1);
        $this->cumin = new Cumin(0.0000001);
        $this->garlic = new Garlic(0.01);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->greenSalad,
            $this->salmon,
            $this->eggs,
            $this->nuts,
            $this->rawCarrot,
            $this->oliveOil,
            $this->cumin,
            $this->garlic
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