<?php


namespace App\Domain\Sport\Controller;


use App\Application\Entity\User;
use App\Domain\Sport\DataTransfertObject\Credentials;
use App\Domain\Sport\Form\UserType;
use App\Domain\Sport\Handler\RegistrationHandler;
use App\Domain\Sport\Presenter\AccueilPresenterInterface;
use App\Domain\Sport\Presenter\ConnexionProgrammePresenterInterface;
use App\Domain\Sport\Presenter\InscriptionUserInfoPresenterInterface;
use App\Domain\Sport\Responder\AccueilResponder;
use App\Domain\Sport\Responder\ConnexionProgrammeResponder;
use App\Domain\Sport\Responder\InscriptionUserInfoResponder;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class InscriptionUserInfo
{

    /**
     * @param Request $request
     * @param InscriptionUserInfoPresenterInterface $inscriptionUserInfoPresenter
     * @param RegistrationHandler $registrationHandler
     * @param UrlGeneratorInterface $urlGenerator
     * @return Response
     */
    public function __invoke(Request $request,
                             InscriptionUserInfoPresenterInterface $inscriptionUserInfoPresenter,
                             RegistrationHandler $registrationHandler,
                             UrlGeneratorInterface $urlGenerator): Response
    {
        if ($registrationHandler->handle($request, new User())) {
            return $inscriptionUserInfoPresenter->redirect($urlGenerator);
        }

        return $inscriptionUserInfoPresenter->present(new InscriptionUserInfoResponder($registrationHandler->createView()));
    }

}