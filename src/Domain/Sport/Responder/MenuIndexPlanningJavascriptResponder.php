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
use App\Application\Entity\Sport\Menu\HightCarb\EggsCasseroleTomatoFeta;
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
use App\Application\Entity\Sport\Menu\HightCarb\VegetablePatty;
use App\Application\Entity\Sport\Menu\LowCarb\BurritoChickenMoutarde;
use App\Application\Entity\Sport\Menu\LowCarb\ChickenCocoMilk;
use App\Application\Entity\Sport\Menu\LowCarb\ChickenCreamBroccoli;
use App\Application\Entity\Sport\Menu\LowCarb\ChickenWok;
use App\Application\Entity\Sport\Menu\LowCarb\EggplantAndMozzarella;
use App\Application\Entity\Sport\Menu\LowCarb\GreekSalad;
use App\Application\Entity\Sport\Menu\LowCarb\MincedTurkeyWithCurriedBroccoli;
use App\Application\Entity\Sport\Menu\LowCarb\MonkfishWithVegetables;
use App\Application\Entity\Sport\Menu\LowCarb\PepperChicken;
use App\Application\Entity\Sport\Menu\LowCarb\SaladeSalmonNoix;
use App\Application\Entity\Sport\Menu\LowCarb\SauteedTurkeyAndBroccoliCake;
use App\Application\Entity\Sport\Menu\LowCarb\SauteedTurkeyWithArtichokeHeart;
use App\Application\Entity\Sport\Menu\LowCarb\SpinachSouffle;
use App\Application\Entity\Sport\Menu\LowCarb\StuffedZucchini;
use App\Application\Entity\Sport\Menu\LowCarb\TartareSalmonCucumber;
use App\Application\Entity\Sport\Menu\LowCarb\VegetableAndSojaSausage;
use App\Application\Entity\Sport\Menu\LowCarb\VegetablesAndSalmon;
use App\Application\Entity\Sport\Menu\LowCarb\WarmGoatCheeseSalad;

/**
 * Class MenuIndexPlanningJavascriptResponder
 * @package App\Domain\Sport\Responder
 */
class MenuIndexPlanningJavascriptResponder
{

    /**
     * @var object
     */
    private object $human;

    /**
     * @var array
     */
    private array $allRecettes;

    /**
     * @var array
     */
    private array $recettesBreakfast;

    /**
     * @var array
     */
    private array $recettesLowCarb;

    /**
     * @var array
     */
    private array $recettesPostTraining;

    /**
     * @var array
     */
    private array $recettesSnack;

    /**
     * MenuIndexPlanningJavascriptResponder constructor.
     * @param object $human
     */
    public function __construct(object $human)
    {
        $this->human = $human;
        $this->createRecettesBreakfast();
        $this->createRecettesLowCarb();
        $this->createRecettesPostTraning();
        $this->createRecettesSnack();
        $this->createAllRecettes();
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
     * @param array $allRecettes
     */
    public function setAllRecettes(array $allRecettes): void
    {
        $this->allRecettes = $allRecettes;
    }


    public function createAllRecettes(): void
    {
        $this->allRecettes[] = new BurritoChickenMoutarde($this->human);
        $this->allRecettes[] = new ChickenCocoMilk($this->human);
        $this->allRecettes[] = new ChickenCreamBroccoli($this->human);
        $this->allRecettes[] = new ChickenWok($this->human);
        $this->allRecettes[] = new EggplantAndMozzarella($this->human);
        $this->allRecettes[] = new GreekSalad($this->human);
        $this->allRecettes[] = new MincedTurkeyWithCurriedBroccoli($this->human);
        $this->allRecettes[] = new MonkfishWithVegetables($this->human);
        $this->allRecettes[] = new PepperChicken($this->human);
        $this->allRecettes[] = new SaladeSalmonNoix($this->human);
        $this->allRecettes[] = new SauteedTurkeyAndBroccoliCake($this->human);
        $this->allRecettes[] = new SauteedTurkeyWithArtichokeHeart($this->human);
        $this->allRecettes[] = new SpinachSouffle($this->human);
        $this->allRecettes[] = new StuffedZucchini($this->human);
        $this->allRecettes[] = new TartareSalmonCucumber($this->human);
        $this->allRecettes[] = new VegetableAndSojaSausage($this->human);
        $this->allRecettes[] = new VegetablesAndSalmon($this->human);
        $this->allRecettes[] = new WarmGoatCheeseSalad($this->human);
        $this->allRecettes[] = new BoBun($this->human);
        $this->allRecettes[] = new CesarSaladParmigianoNuggets($this->human);
        $this->allRecettes[] = new ChickenAndPasta($this->human);
        $this->allRecettes[] = new ChickenApricot($this->human);
        $this->allRecettes[] = new ChickenCurryCoco($this->human);
        $this->allRecettes[] = new ChickendAndZucchiniFries($this->human);
        $this->allRecettes[] = new ChickenPotatoes($this->human);
        $this->allRecettes[] = new EggsCasseroleTomatoFeta($this->human);
        $this->allRecettes[] = new EggsChickpeaAndAspargus($this->human);
        $this->allRecettes[] = new EggsWithSweatPotatoes($this->human);
        $this->allRecettes[] = new GreenBagel($this->human);
        $this->allRecettes[] = new KoreanBeefRice($this->human);
        $this->allRecettes[] = new PastaAndGreenAsparagus($this->human);
        $this->allRecettes[] = new PastaBolognese($this->human);
        $this->allRecettes[] = new RisottoQuinoa($this->human);
        $this->allRecettes[] = new SalmonBagel($this->human);
        $this->allRecettes[] = new ShrimpAndPasta($this->human);
        $this->allRecettes[] = new ShrimpRiceCoco($this->human);
        $this->allRecettes[] = new VegetablePatty($this->human);
    }



    /**
     * @return array
     */
    public function getRecettesBreakfast(): array
    {
        return $this->recettesBreakfast;
    }

    /**
     * @param array $recettesBreakfast
     */
    public function setRecettesBreakfast(array $recettesBreakfast): void
    {
        $this->recettesBreakfast = $recettesBreakfast;
    }


    public function createRecettesBreakfast(): void
    {
        $this->recettesBreakfast[] = new BowlCakeHealthy($this->human);
        $this->recettesBreakfast[] = new MorningBowlTofu($this->human);
        $this->recettesBreakfast[] = new GaufresHealthy($this->human);
        $this->recettesBreakfast[] = new EggsPepperBreakfast($this->human);
        $this->recettesBreakfast[] = new EggsPocheAndFrutz($this->human);
        $this->recettesBreakfast[] = new BolwcakeAmandeChocolat($this->human);
        $this->recettesBreakfast[] = new BananaDattesSmoothie($this->human);
        $this->recettesBreakfast[] = new SoftChocoMousse($this->human);
        $this->recettesBreakfast[] = new FruityGranolaVerrines($this->human);
        $this->recettesBreakfast[] = new EggsAvocadoCasserole($this->human);
        $this->recettesBreakfast[] = new PancakeCauliflowerWithEggsAvocadoSalmon($this->human);
        $this->recettesBreakfast[] = new BuckwheatPancake($this->human);
        $this->recettesBreakfast[] = new MuesliAndEggs($this->human);
        $this->recettesBreakfast[] = new BeetDetoxGazpacho($this->human);
    }

    /**
     * @return array
     */
    public function getRecettesLowCarb(): array
    {
        return $this->recettesLowCarb;
    }

    /**
     * @param array $recettesLowCarb
     */
    public function setRecettesLowCarb(array $recettesLowCarb): void
    {
        $this->recettesLowCarb = $recettesLowCarb;
    }




    public function createRecettesLowCarb(): void
    {
        $this->recettesLowCarb[] = new BurritoChickenMoutarde($this->human);
        $this->recettesLowCarb[] = new ChickenCocoMilk($this->human);
        $this->recettesLowCarb[] = new ChickenCreamBroccoli($this->human);
        $this->recettesLowCarb[] = new ChickenWok($this->human);
        $this->recettesLowCarb[] = new EggplantAndMozzarella($this->human);
        $this->recettesLowCarb[] = new GreekSalad($this->human);
        $this->recettesLowCarb[] = new MincedTurkeyWithCurriedBroccoli($this->human);
        $this->recettesLowCarb[] = new MonkfishWithVegetables($this->human);
        $this->recettesLowCarb[] = new PepperChicken($this->human);
        $this->recettesLowCarb[] = new SaladeSalmonNoix($this->human);
        $this->recettesLowCarb[] = new SauteedTurkeyAndBroccoliCake($this->human);
        $this->recettesLowCarb[] = new SauteedTurkeyWithArtichokeHeart($this->human);
        $this->recettesLowCarb[] = new SpinachSouffle($this->human);
        $this->recettesLowCarb[] = new StuffedZucchini($this->human);
        $this->recettesLowCarb[] = new TartareSalmonCucumber($this->human);
        $this->recettesLowCarb[] = new VegetableAndSojaSausage($this->human);
        $this->recettesLowCarb[] = new VegetablesAndSalmon($this->human);
        $this->recettesLowCarb[] = new WarmGoatCheeseSalad($this->human);
    }

    /**
     * @return array
     */
    public function getRecettesPostTraining(): array
    {
        return $this->recettesPostTraining;
    }

    /**
     * @param array $recettesPostTraining
     */
    public function setRecettesPostTraining(array $recettesPostTraining): void
    {
        $this->recettesPostTraining = $recettesPostTraining;
    }




    public function createRecettesPostTraning(): void
    {
        $this->recettesPostTraining[] = new BoBun($this->human);
        $this->recettesPostTraining[] = new CesarSaladParmigianoNuggets($this->human);
        $this->recettesPostTraining[] = new ChickenAndPasta($this->human);
        $this->recettesPostTraining[] = new ChickenApricot($this->human);
        $this->recettesPostTraining[] = new ChickenCurryCoco($this->human);
        $this->recettesPostTraining[] = new ChickendAndZucchiniFries($this->human);
        $this->recettesPostTraining[] = new ChickenPotatoes($this->human);
        $this->recettesPostTraining[] = new EggsCasseroleTomatoFeta($this->human);
        $this->recettesPostTraining[] = new EggsChickpeaAndAspargus($this->human);
        $this->recettesPostTraining[] = new EggsWithSweatPotatoes($this->human);
        $this->recettesPostTraining[] = new GreenBagel($this->human);
        $this->recettesPostTraining[] = new KoreanBeefRice($this->human);
        $this->recettesPostTraining[] = new PastaAndGreenAsparagus($this->human);
        $this->recettesPostTraining[] = new PastaBolognese($this->human);
        $this->recettesPostTraining[] = new RisottoQuinoa($this->human);
        $this->recettesPostTraining[] = new SalmonBagel($this->human);
        $this->recettesPostTraining[] = new ShrimpAndPasta($this->human);
        $this->recettesPostTraining[] = new ShrimpRiceCoco($this->human);
        $this->recettesPostTraining[] = new VegetablePatty($this->human);
    }

    /**
     * @return array
     */
    public function getRecettesSnack(): array
    {
        return $this->recettesSnack;
    }

    /**
     * @param array $recettesSnack
     */
    public function setRecetteSnack(array $recettesSnack): void
    {
        $this->recettesSnack = $recettesSnack;
    }


    public function createRecettesSnack(): void
    {
        $this->recettesSnack[] = new EggsCasseroleTomatoFeta($this->human);
        $this->recettesSnack[] = new EggsCasseroleTomatoFeta($this->human);
        $this->recettesSnack[] = new EggsCasseroleTomatoFeta($this->human);
        $this->recettesSnack[] = new EggsCasseroleTomatoFeta($this->human);
        $this->recettesSnack[] = new EggsCasseroleTomatoFeta($this->human);
        $this->recettesSnack[] = new EggsCasseroleTomatoFeta($this->human);
        $this->recettesSnack[] = new EggsCasseroleTomatoFeta($this->human);
        $this->recettesSnack[] = new EggsCasseroleTomatoFeta($this->human);
        $this->recettesSnack[] = new EggsCasseroleTomatoFeta($this->human);
        $this->recettesSnack[] = new EggsCasseroleTomatoFeta($this->human);
    }



}