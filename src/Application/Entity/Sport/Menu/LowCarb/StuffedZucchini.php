<?php


namespace App\Application\Entity\Sport\Menu\LowCarb;


use App\Application\Entity\Sport\Condiments\Basilic;
use App\Application\Entity\Sport\Condiments\Origan;
use App\Application\Entity\Sport\Condiments\Salt;
use App\Application\Entity\Sport\Fat\Cheese\Mozzarella;
use App\Application\Entity\Sport\Legumes\CherryTomato;
use App\Application\Entity\Sport\Legumes\TomatoCoulis;
use App\Application\Entity\Sport\Legumes\Zucchini;
use App\Application\Entity\Sport\Oil\OliveOil;

class StuffedZucchini extends LowCarbMenu
{

    private Zucchini $zucchini;

    private TomatoCoulis $tomatoCoulis;

    private CherryTomato $cherryTomato;

    private Mozzarella $mozzarella;

    private OliveOil $oliveOil;

    private Salt $salt;

    private Basilic $basilic;

    private Origan $origan;

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->name = "Courgette farcies à la mozzarella";
        $this->pathLogo = "stuffedZucchini.jpg";
        $this->nameClass = "StuffedZucchini";
        $this->diet = ["vegetarian"];
        $this->setDefineNumberCaloriesTotalForMenuLowCarb();
        $this->zucchini = new Zucchini($this->totalCalories * 0.1);
        $this->tomatoCoulis = new TomatoCoulis($this->totalCalories * 0.1);
        $this->cherryTomato = new CherryTomato($this->totalCalories * 0.06);
        $this->mozzarella = new Mozzarella($this->totalCalories * 0.6);
        $this->oliveOil = new OliveOil($this->totalCalories * 0.1);
        $this->salt = new Salt(0.0001);
        $this->basilic = new Basilic(0.0001);
        $this->origan = new Origan(0.0001);
        $this->setRepartitionAliment();
        $this->setQuantityAlim();
        $this->setExplication();
    }

    public function setRepartitionAliment()
    {
        $this->arrayAllAlim = [
            $this->zucchini,
            $this->tomatoCoulis,
            $this->cherryTomato,
            $this->mozzarella,
            $this->oliveOil,
            $this->salt,
            $this->basilic,
            $this->origan
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