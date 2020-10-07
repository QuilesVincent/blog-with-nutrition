<?php


namespace App\Domain\Sport\Controller;


use App\Application\Entity\Human;
use App\Domain\Sport\Handler\HumanHandler;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;

class SportWeek2
{
    /**
     * @param Request $request
     * @param HumanHandler $humanHandler
     * @param UrlGeneratorInterface $urlGenerator
     * @param EntityManagerInterface $entityManager
     * @param Security $security
     * @return Response
     */
    public function __invoke(Request $request,
                             HumanHandler $humanHandler,
                             UrlGeneratorInterface $urlGenerator,
                             EntityManagerInterface $entityManager,
                             Security $security): Response
    {

        $human = $entityManager->getRepository(Human::class)->findOneBy(["user" => $security->getUser()->getId()]);

        return new Response($human->getWeightControlFirstWeek());
    }
}