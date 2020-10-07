<?php


namespace App\Domain\Sport\Controller;


use App\Application\Entity\Human;
use App\Domain\Sport\Presenter\MenuIndexPresenterInterface;
use App\Domain\Sport\Responder\MenuIndexResponder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;

class MenuIndex
{

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param MenuIndexPresenterInterface $menuIndexPresenter
     * @param Security $security
     * @param UrlGeneratorInterface $urlGenerator
     * @return Response
     */
    public function __invoke(Request $request,
                             EntityManagerInterface $entityManager,
                             MenuIndexPresenterInterface $menuIndexPresenter,
                             Security $security,
                             UrlGeneratorInterface $urlGenerator): Response
    {

        $human = $entityManager->getRepository(Human::class)->findOneBy(["user" => $security->getUser()->getId()]);

        //Faire cette partie la sous forme de fonction, car recopié dans pas mal d'endroit
        $dateBeginning = $human->getDateBeginningProgram();
        $dayDate = new \DateTimeImmutable();
        $diff = $dateBeginning->diff($dayDate);
        if (($diff->d > 6 || $diff->m > 0 || $diff->y > 0) && $human->getWeightControlLastWeek() == null) {
            return $menuIndexPresenter->redirect($urlGenerator);
        }

        return $menuIndexPresenter->present(new MenuIndexResponder($human));
    }

}