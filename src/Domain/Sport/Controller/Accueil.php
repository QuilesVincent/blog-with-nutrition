<?php


namespace App\Domain\Sport\Controller;


use App\Application\Entity\User;
use App\Domain\Sport\DataTransfertObject\Credentials;
use App\Domain\Sport\Form\UserType;
use App\Domain\Sport\Handler\RegistrationHandler;
use App\Domain\Sport\Presenter\AccueilPresenterInterface;
use App\Domain\Sport\Presenter\ConnexionProgrammePresenterInterface;
use App\Domain\Sport\Responder\AccueilResponder;
use App\Domain\Sport\Responder\ConnexionProgrammeResponder;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class Accueil
{

    /**
     * @param AuthenticationUtils $authenticationUtils
     * @param Request $request
     * @param FormFactoryInterface $formFactory
     * @param AccueilPresenterInterface $accueilPresenter
     * @return Response
     */
    public function __invoke(AuthenticationUtils $authenticationUtils,
                             Request $request,
                             FormFactoryInterface $formFactory,
                             AccueilPresenterInterface $accueilPresenter): Response
    {
        $form = $formFactory->create(UserType::class, new Credentials($authenticationUtils->getLastUsername()))->handleRequest($request);
        if (null !== $authenticationUtils->getLastAuthenticationError(false)) {
            $form->addError(new FormError($authenticationUtils->getLastAuthenticationError()->getMessage()));
        }

        return $accueilPresenter->present(new AccueilResponder($form->createView()));
    }

}