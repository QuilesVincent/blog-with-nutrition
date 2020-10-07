<?php


namespace App\Domain\Sport\Responder;


use App\Application\Entity\Sport\Menu\Breakfast\AppleCompote;
use App\Application\Entity\Sport\Menu\HightCarb\Birchermuesli;
use App\Application\Entity\Sport\Menu\HightCarb\BowlCake;
use App\Application\Entity\Sport\Menu\HightCarb\EggsLegs;
use App\Application\Entity\Sport\Menu\HightCarb\MilkAndRice;
use App\Application\Entity\Sport\Menu\HightCarb\MuesliVerrines;
use App\Application\Entity\Sport\Menu\HightCarb\OatBananaAndChocolat;
use App\Application\Entity\Sport\Menu\HightCarb\PorridgePomme;
use App\Application\Entity\Sport\Menu\HightCarb\RaisinBlinis;
use App\Application\Entity\Sport\Menu\HightCarb\SmoothieRedFruits;

class ChoiceFormuleResponder
{

    private array $products;

    /**
     * PageProgrammeResponder constructor.
     * @param array $products
     */
    public function __construct(array $products)
    {
        $this->products = $products;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }










}