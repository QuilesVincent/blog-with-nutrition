<?php


namespace App\Domain\Sport\Controller;


use App\Application\Entity\Human;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio1;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio1Demo;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio2;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio2Demo;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio1Demo as SportsProgramCardio1Intermediate;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio2Demo as SportsProgramCardio2Intermediate;
use App\Domain\Sport\Presenter\TrainingIndexDemoPresenterInterface;
use App\Domain\Sport\Presenter\TrainingIndexPresenterInterface;
use App\Domain\Sport\Responder\TrainingIndexDemoResponder;
use App\Domain\Sport\Responder\TrainingIndexResponder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;

class TrainingIndexDemo
{

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param TrainingIndexDemoPresenterInterface $trainingIndexDemoPresenter
     * @param Security $security
     * @param UrlGeneratorInterface $urlGenerator
     * @param SportsProgramCardio1Demo $sportsProgramCardio1
     * @param SportsProgramCardio1Intermediate $sportsProgramCardio1Intermediate
     * @param SportsProgramCardio2Demo $sportsProgramCardio2
     * @param SportsProgramCardio2Intermediate $sportsProgramCardio2Intermediate
     * @return Response
     */
    public function __invoke(Request $request,
                             EntityManagerInterface $entityManager,
                             TrainingIndexDemoPresenterInterface $trainingIndexDemoPresenter,
                             Security $security,
                             UrlGeneratorInterface $urlGenerator,
                             SportsProgramCardio1Demo $sportsProgramCardio1,
                             SportsProgramCardio1Intermediate $sportsProgramCardio1Intermediate,
                             SportsProgramCardio2Demo $sportsProgramCardio2,
                             SportsProgramCardio2Intermediate $sportsProgramCardio2Intermediate): Response
    {

        $human = $entityManager->getRepository(Human::class)->findOneBy(["user" => $security->getUser()->getId()]);

        //Faire cette partie la sous forme de fonction, car recopié dans pas mal d'endroit
        $dateBeginning = $human->getDateBeginningProgram();
        $dayDate = new \DateTimeImmutable();
        $diff = $dateBeginning->diff($dayDate);
        if(($diff->d > 6 || $diff->m > 0 || $diff->y > 0) && $human->getWeightControlLastWeek() == null) {
            return $trainingIndexDemoPresenter->redirect($urlGenerator);
        }

        return $trainingIndexDemoPresenter->present(new TrainingIndexDemoResponder($human),
            $sportsProgramCardio1,
            $sportsProgramCardio1Intermediate,
            $sportsProgramCardio2,
            $sportsProgramCardio2Intermediate
        );
    }

}