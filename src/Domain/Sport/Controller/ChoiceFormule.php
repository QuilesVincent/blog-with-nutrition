<?php


namespace App\Domain\Sport\Controller;


use App\Application\Entity\Product;
use App\Domain\Sport\Presenter\ChoiceFormulePresenterInterface;
use App\Domain\Sport\Responder\ChoiceFormuleResponder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\SerializerInterface;

class   ChoiceFormule
{

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param ChoiceFormulePresenterInterface $choiceFormulePresenter
     * @param Security $security
     * @param UrlGeneratorInterface $urlGenerator
     * @param Filesystem $filesystem
     * @param SerializerInterface $serializer
     * @return Response
     */
    public function __invoke(Request $request,
                             EntityManagerInterface $entityManager,
                             ChoiceFormulePresenterInterface $choiceFormulePresenter,
                             Security $security,
                             UrlGeneratorInterface $urlGenerator,
                             Filesystem $filesystem,
                             SerializerInterface $serializer): Response
    {

        $user = $security->getUser();

        if ($user->getFormuleSport() !== null) {
            return $choiceFormulePresenter->redirect($urlGenerator);
        }

        $product = $entityManager->getRepository(Product::class)->findAll();

        return $choiceFormulePresenter->present(new ChoiceFormuleResponder($product));
    }

}