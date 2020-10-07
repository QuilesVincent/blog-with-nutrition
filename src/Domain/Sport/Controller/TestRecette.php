<?php


namespace App\Domain\Sport\Controller;


use App\Application\Entity\Human;
use App\Application\Entity\Sport\Meat\WhiteMeat\ChickenThigh;
use App\Application\Entity\Sport\Menu\Breakfast\AppleCompote;
use App\Application\Entity\Sport\Menu\Breakfast\BolwcakeAmandeChocolat;
use App\Application\Entity\Sport\Menu\Breakfast\EggsPocheAndFrutz;
use App\Application\Entity\Sport\Menu\Breakfast\GaufresHealthy;
use App\Application\Entity\Sport\Menu\Dinner\ChickenCurryCoco;
use App\Application\Entity\Sport\Menu\Dinner\ChickenPotatoes;
use App\Application\Entity\Sport\Menu\Dinner\EggsLegs;
use App\Application\Entity\Sport\Menu\HightCarb\ChickenAndPasta;
use App\Application\Entity\Sport\Menu\HightCarb\ChickenCocoMilk;
use App\Application\Entity\Sport\Menu\HightCarb\PepperChicken;
use App\Application\Entity\Sport\Menu\HightCarb\SaladeSalmonNoix;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Security;
use Twig\Environment;

class TestRecette
{

    public function __invoke(EntityManagerInterface $entityManager, Security $security, Environment $twig)
    {
        $human = $entityManager->getRepository(Human::class)->findOneBy(["user" => $security->getUser()->getId()]);

        $appleCompote = new EggsLegs($human);
        $newTestBaby = new PepperChicken($human);
        $chickenBaby = new ChickenAndPasta($human);
        $gaufre = new GaufresHealthy($human);
        $bolwcake = new BolwcakeAmandeChocolat($human);
        $krisprolls = new EggsPocheAndFrutz($human);
        $salad = new SaladeSalmonNoix($human);
        $chickenCocoMilk = new ChickenCocoMilk($human);
        $chickenCurry = new ChickenCurryCoco($human);
        $chickenPotatoes = new ChickenPotatoes($human);
        $apple = $appleCompote->getApple();
        $avocado = $appleCompote->getAvocado();
        $oatMeal = $appleCompote->getOatMeal();
        $pain = $appleCompote->getPain();
        return new Response($twig->render("sport/programme/test.html.twig", [
            "test" => $appleCompote,
            "test2" => $newTestBaby,
            "test3" => $salad,
            "test4" => $chickenCocoMilk,
            "test5" => $gaufre,
            "test6" => $bolwcake,
            "test7" => $krisprolls,
            "test8" => $chickenBaby,
            "test9" => $chickenCurry,
            "test10" => $chickenPotatoes
        ]));
    }

}