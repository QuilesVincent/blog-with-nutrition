<?php


namespace App\Domain\Sport\Controller;


use App\Application\Entity\Human;
use App\Domain\Sport\Presenter\BeginningSportPresenterInterface;
use App\Domain\Sport\Responder\BeginningSportResponder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Security;

class BeginningSport
{

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param BeginningSportPresenterInterface $beginningSportPresenter
     * @param Security $security
     * @return Response
     */
    public function __invoke(Request $request,
                             EntityManagerInterface $entityManager,
                             BeginningSportPresenterInterface $beginningSportPresenter,
                             Security $security): Response
    {

        $human = $entityManager->getRepository(Human::class)->findOneBy(["user" => $security->getUser()->getId()]);

        return $beginningSportPresenter->present(new BeginningSportResponder($human));
    }

}