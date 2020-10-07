<?php


namespace App\Domain\Sport\Controller;


use App\Domain\Sport\DataTransfertObject\Credentials;
use App\Domain\Sport\Form\UserType;
use App\Domain\Sport\Presenter\ConnexionProgrammePresenterInterface;
use App\Domain\Sport\Responder\ConnexionProgrammeResponder;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class ConnexionProgramme
{

    /**
     * @param AuthenticationUtils $authenticationUtils
     * @param Request $request
     * @param FormFactoryInterface $formFactory
     * @param ConnexionProgrammePresenterInterface $connexionProgrammePresenter
     * @return Response
     */
    public function __invoke(AuthenticationUtils $authenticationUtils,
                             Request $request,
                             FormFactoryInterface $formFactory,
                             ConnexionProgrammePresenterInterface $connexionProgrammePresenter): Response
    {
        $form = $formFactory->create(UserType::class, new Credentials($authenticationUtils->getLastUsername()))->handleRequest($request);
        if (null !== $authenticationUtils->getLastAuthenticationError(false)) {
            $form->addError(new FormError($authenticationUtils->getLastAuthenticationError()->getMessage()));
        }
        return $connexionProgrammePresenter->present(new ConnexionProgrammeResponder($form->createView()));
    }

}