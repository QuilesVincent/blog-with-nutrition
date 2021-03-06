<?php


namespace App\Domain\Sport\Responder;





use App\Application\Entity\Sport\Menu\Breakfast\BananaDattesSmoothie;
use App\Application\Entity\Sport\Menu\Breakfast\BeetDetoxGazpacho;
use App\Application\Entity\Sport\Menu\Breakfast\BolwcakeAmandeChocolat;
use App\Application\Entity\Sport\Menu\Breakfast\BowlCakeHealthy;
use App\Application\Entity\Sport\Menu\Breakfast\BuckwheatPancake;
use App\Application\Entity\Sport\Menu\Breakfast\EggsAvocadoCasserole;
use App\Application\Entity\Sport\Menu\Breakfast\EggsPepperBreakfast;
use App\Application\Entity\Sport\Menu\Breakfast\EggsPocheAndFrutz;
use App\Application\Entity\Sport\Menu\Breakfast\FruityGranolaVerrines;
use App\Application\Entity\Sport\Menu\Breakfast\GaufresHealthy;
use App\Application\Entity\Sport\Menu\Breakfast\MorningBowlTofu;
use App\Application\Entity\Sport\Menu\Breakfast\MuesliAndEggs;
use App\Application\Entity\Sport\Menu\Breakfast\PancakeCauliflowerWithEggsAvocadoSalmon;
use App\Application\Entity\Sport\Menu\Breakfast\SoftChocoMousse;
use App\Application\Entity\Sport\Menu\HightCarb\BoBun;
use App\Application\Entity\Sport\Menu\HightCarb\CesarSaladParmigianoNuggets;
use App\Application\Entity\Sport\Menu\HightCarb\ChickenAndPasta;
use App\Application\Entity\Sport\Menu\HightCarb\ChickenApricot;
use App\Application\Entity\Sport\Menu\HightCarb\ChickenCurryCoco;
use App\Application\Entity\Sport\Menu\HightCarb\ChickendAndZucchiniFries;
use App\Application\Entity\Sport\Menu\HightCarb\ChickenPotatoes;
use App\Application\Entity\Sport\Menu\HightCarb\EggsChickpeaAndAspargus;
use App\Application\Entity\Sport\Menu\HightCarb\EggsWithSweatPotatoes;
use App\Application\Entity\Sport\Menu\HightCarb\GreenBagel;
use App\Application\Entity\Sport\Menu\HightCarb\KoreanBeefRice;
use App\Application\Entity\Sport\Menu\HightCarb\PastaAndGreenAsparagus;
use App\Application\Entity\Sport\Menu\HightCarb\PastaBolognese;
use App\Application\Entity\Sport\Menu\HightCarb\RisottoQuinoa;
use App\Application\Entity\Sport\Menu\HightCarb\SalmonBagel;
use App\Application\Entity\Sport\Menu\HightCarb\ShrimpAndPasta;
use App\Application\Entity\Sport\Menu\HightCarb\ShrimpRiceCoco;
use App\Application\Entity\Sport\Menu\HightCarb\EggsCasseroleTomatoFeta;
use App\Application\Entity\Sport\Menu\LowCarb\MincedTurkeyWithCurriedBroccoli;
use App\Application\Entity\Sport\Menu\LowCarb\SauteedTurkeyAndBroccoliCake;
use App\Application\Entity\Sport\Menu\LowCarb\StuffedZucchini;
use App\Application\Entity\Sport\Menu\HightCarb\VegetablePatty;
use App\Application\Entity\Sport\Menu\LowCarb\ChickenCreamBroccoli;
use App\Application\Entity\Sport\Menu\LowCarb\BurritoChickenMoutarde;
use App\Application\Entity\Sport\Menu\LowCarb\ChickenCocoMilk;
use App\Application\Entity\Sport\Menu\LowCarb\ChickenWok;
use App\Application\Entity\Sport\Menu\LowCarb\EggplantAndMozzarella;
use App\Application\Entity\Sport\Menu\LowCarb\GreekSalad;
use App\Application\Entity\Sport\Menu\LowCarb\MonkfishWithVegetables;
use App\Application\Entity\Sport\Menu\LowCarb\PepperChicken;
use App\Application\Entity\Sport\Menu\LowCarb\SaladeSalmonNoix;
use App\Application\Entity\Sport\Menu\LowCarb\SauteedTurkeyWithArtichokeHeart;
use App\Application\Entity\Sport\Menu\LowCarb\SpinachSouffle;
use App\Application\Entity\Sport\Menu\LowCarb\TartareSalmonCucumber;
use App\Application\Entity\Sport\Menu\LowCarb\VegetablesAndSalmon;
use App\Application\Entity\Sport\Menu\LowCarb\VegetableAndSojaSausage;
use App\Application\Entity\Sport\Menu\LowCarb\WarmGoatCheeseSalad;
use App\Application\Entity\Sport\Menu\ProductCreation\Bread;
use App\Application\Entity\Sport\Menu\Snack\AppleCrumbleHealthy;
use App\Application\Entity\Sport\Menu\Snack\BakedApplesStuffedWithDriedFruits;
use App\Application\Entity\Sport\Menu\Snack\BananaSushi;
use App\Application\Entity\Sport\Menu\Snack\ChiaPudding;
use App\Application\Entity\Sport\Menu\Snack\ChiaSeedPuddingCocoMilk;
use App\Application\Entity\Sport\Menu\Snack\MugCakeChocoCoco;
use App\Application\Entity\Sport\Menu\Snack\SmoothieBurn;
use App\Application\Entity\Sport\Menu\Snack\VeganCreamMangoBananCardamom;

class MenuIndexDemoResponder
{

    private object $human;

    private array $allRecettesBreakfast;

    private array $allRecettesLowCarb;

    private array $allRecetteHightCarb;

    private array $allRecetteSnack;

    private array $allRecettes;

    public function __construct(object $human)
    {
        $this->human = $human;
        $this->setAllRecettes();
    }

    /**
     * @return object
     */
    public function getHuman(): object
    {
        return $this->human;
    }

    /**
     * @return array
     */
    public function getAllRecettes(): array
    {
        return $this->allRecettes;
    }

    /**
     * @return array
     */
    public function getAllRecettesBreakfast(): array
    {
        return $this->allRecettesBreakfast;
    }

    /**
     *
     */
    public function setAllRecettesBreakfast(): void
    {
        $this->allRecettesBreakfast[] = new GaufresHealthy($this->human);
        $this->allRecettesBreakfast[] = new BolwcakeAmandeChocolat($this->human);
        $this->allRecettesBreakfast[] = new FruityGranolaVerrines($this->human);
    }

    /**
     * @return array
     */
    public function getAllRecettesLowCarb(): array
    {
        return $this->allRecettesLowCarb;
    }

    /**
     *
     */
    public function setAllRecettesLowCarb(): void
    {
        $this->allRecettesLowCarb[] = new WarmGoatCheeseSalad($this->human);
        $this->allRecettesLowCarb[] = new VegetablesAndSalmon($this->human);
        $this->allRecettesLowCarb[] = new MonkfishWithVegetables($this->human);
        $this->allRecettesLowCarb[] = new SpinachSouffle($this->human);
        $this->allRecettesLowCarb[] = new BurritoChickenMoutarde($this->human);
    }

    /**
     * @return array
     */
    public function getAllRecetteHightCarb(): array
    {
        return $this->allRecetteHightCarb;
    }

    /**
     *
     */
    public function setAllRecetteHightCarb(): void
    {
        $this->allRecetteHightCarb[] = new ShrimpAndPasta($this->human);
        $this->allRecetteHightCarb[] = new SalmonBagel($this->human);
        $this->allRecetteHightCarb[] = new VegetablePatty($this->human);
        $this->allRecetteHightCarb[] = new ChickenPotatoes($this->human);
        $this->allRecetteHightCarb[] = new PastaAndGreenAsparagus($this->human);
        $this->allRecetteHightCarb[] = new CesarSaladParmigianoNuggets($this->human);
    }

    /**
     * @return array
     */
    public function getAllRecetteSnack(): array
    {
        return $this->allRecetteSnack;
    }

    /**
     *
     */
    public function setAllRecetteSnack(): void
    {
        $this->allRecetteSnack[] = new VeganCreamMangoBananCardamom($this->human);
        $this->allRecetteSnack[] = new SmoothieBurn($this->human);
        $this->allRecetteSnack[] = new AppleCrumbleHealthy($this->human);
    }


    /**
     *
     */
    public function setAllRecettes(): void
    {
        $this->setAllRecettesBreakfast();
        $this->setAllRecettesLowCarb();
        $this->setAllRecetteHightCarb();
        $this->setAllRecetteSnack();
    }

}