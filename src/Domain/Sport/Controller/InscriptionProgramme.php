<?php


namespace App\Domain\Sport\Controller;




use App\Application\Entity\Human;
use App\Domain\Sport\Handler\HumanHandler;
use App\Domain\Sport\Presenter\InscriptionProgrammePresenterInterface;
use App\Domain\Sport\Responder\InscriptionProgrammeResponder;
use App\Infrastructure\Event\ReverseEvent;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;

class InscriptionProgramme extends AbstractController
{

    /**
     * @param Request $request
     * @param HumanHandler $humanHandler
     * @param InscriptionProgrammePresenterInterface $inscriptionProgrammePresenter
     * @param UrlGeneratorInterface $urlGenerator
     * @param EntityManagerInterface $entityManager
     * @param Security $security
     * @return Response
     */
    public function __invoke(Request $request,
                             HumanHandler $humanHandler,
                             InscriptionProgrammePresenterInterface $inscriptionProgrammePresenter,
                             UrlGeneratorInterface $urlGenerator,
                             EntityManagerInterface $entityManager,
                             Security $security): Response
    {

        if($entityManager->getRepository(Human::class)->findOneBy(["user" => $security->getUser()->getId()])) {
            return $inscriptionProgrammePresenter->redirectIsExist($urlGenerator);
        };
        if ($humanHandler->handle($request, new Human())) {
            return $inscriptionProgrammePresenter->redirect($urlGenerator);
        }

        return $inscriptionProgrammePresenter->present(new InscriptionProgrammeResponder($humanHandler->createView()));
    }

}