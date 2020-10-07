<?php


namespace App\Domain\Sport\Controller;


use App\Application\Entity\Human;
use App\Application\Entity\Sport\Circuits\Beginner\BeginnerCircuitOne;
use App\Domain\Sport\Presenter\CircuitSelectedPresenterInterface;
use App\Domain\Sport\Presenter\TrainingIndexPresenterInterface;
use App\Domain\Sport\Responder\CircuitSelectedResponder;
use App\Domain\Sport\Responder\TrainingIndexResponder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\SerializerInterface;

class CircuitSelected
{

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param CircuitSelectedPresenterInterface $circuitSelectedPresenter
     * @param Security $security
     * @param UrlGeneratorInterface $urlGenerator
     * @param SerializerInterface $serializer
     * @return Response
     */
    public function __invoke(Request $request,
                             EntityManagerInterface $entityManager,
                             CircuitSelectedPresenterInterface $circuitSelectedPresenter,
                             Security $security,
                             UrlGeneratorInterface $urlGenerator, SerializerInterface $serializer): Response
    {


        $slug = $request->get("slug");
        $name = "App\\Application\\Entity\\Sport\\Circuits\\Beginner\\". $slug;

        $circuit = new $name();

        $human = $entityManager->getRepository(Human::class)->findOneBy(["user" => $security->getUser()->getId()]);

        //Faire cette partie la sous forme de fonction, car recopié dans pas mal d'endroit
        $dateBeginning = $human->getDateBeginningProgram();
        $dayDate = new \DateTimeImmutable();
        $diff = $dateBeginning->diff($dayDate);
        if(($diff->d > 6 || $diff->m > 0 || $diff->y > 0) && $human->getWeightControlLastWeek() == null) {
            return $circuitSelectedPresenter->redirect($urlGenerator);
        }

        //return new Response($circuit->getName());

        return $circuitSelectedPresenter->present(new CircuitSelectedResponder($circuit, $slug, $human));
    }

}