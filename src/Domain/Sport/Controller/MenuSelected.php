<?php

namespace App\Domain\Sport\Controller;

use App\Application\Entity\Human;
use App\Domain\Sport\Presenter\MenuSelectedPresenterInterface;
use App\Domain\Sport\Responder\MenuSelectedResponder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\SerializerInterface;

class MenuSelected
{
    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param MenuSelectedPresenterInterface $menuSelectedPresenter
     * @param Security $security
     * @param UrlGeneratorInterface $urlGenerator
     * @param SerializerInterface $serializer
     * @return Response
     */
    public function __invoke(Request $request,
                             EntityManagerInterface $entityManager,
                             MenuSelectedPresenterInterface $menuSelectedPresenter,
                             Security $security,
                             UrlGeneratorInterface $urlGenerator, SerializerInterface $serializer): Response
    {
        $slug = $request->get('slug');
        $slugType = $request->get('slugType');
        $name = "App\\Application\\Entity\\Sport\\Menu\\$slugType\\".$slug;

        $human = $entityManager->getRepository(Human::class)->findOneBy(['user' => $security->getUser()->getId()]);

        $recette = new $name($human);

        //Faire cette partie la sous forme de fonction, car recopié dans pas mal d'endroit
        $dateBeginning = $human->getDateBeginningProgram();
        $dayDate = new \DateTimeImmutable();
        $diff = $dateBeginning->diff($dayDate);
        if (($diff->d > 6 || $diff->m > 0 || $diff->y > 0) && null == $human->getWeightControlLastWeek()) {
            return $menuSelectedPresenter->redirect($urlGenerator);
        }

        return $menuSelectedPresenter->present(new MenuSelectedResponder($recette, $human));
    }
}
