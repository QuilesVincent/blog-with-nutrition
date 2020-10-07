<?php

namespace App\Domain\Sport\Controller;

use App\Application\Entity\Product;
use App\Domain\Sport\Presenter\PaiementControlPresenterInterface;
use App\Domain\Sport\Responder\PaiementControlResponder;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\PaymentIntent;
use Stripe\Stripe;
use Stripe\StripeClient;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;

/**
 * Class PaiementControl.
 */
class PaiementControl
{
    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param PaiementControlPresenterInterface $paiementControlPresenter
     * @param Security $security
     * @param UrlGeneratorInterface $urlGenerator
     * @param Product $product
     * @param SessionInterface $session
     * @param FormFactoryInterface $formFactory
     * @return Response
     * @throws \Stripe\Exception\ApiErrorException
     */
    public function __invoke(Request $request,
                             EntityManagerInterface $entityManager,
                             PaiementControlPresenterInterface $paiementControlPresenter,
                             Security $security,
                             UrlGeneratorInterface $urlGenerator,
                             Product $product,
                             SessionInterface $session,
                             FormFactoryInterface $formFactory): Response
    {
        //Panier fais pour le test, mais pas vraiment besoin pour l'instant, car seulement un produit achetable à chaque fois
        //Tout peut donc être géré grâce à la transmission du produit
        $panier = $session->get('panier', []);
        $panier[$product->getId()] = 1;
        $session->set('panier', $panier);

        Stripe::setApikey('sk_test_51GsTPmKLPfQ86kQCC69kxmKU0kwDg9ajZkJpIbvx5pmI8vlUGRstw4CeiqEYF4kqJVAUqbV7tpUd9v7CUuCuchhw001Fx6Azjv');

        $intentPrePay = PaymentIntent::create([
            'amount' => $product->getPrice() * 100,
            'currency' => 'eur',
            'metadata' => ['integration_check' => 'accept_a_payment'],
        ]);

        if ($request->isMethod('POST')) {
            $token = $request->request->get('stripeToken');
            $stripe = new StripeClient('sk_test_51GsTPmKLPfQ86kQCC69kxmKU0kwDg9ajZkJpIbvx5pmI8vlUGRstw4CeiqEYF4kqJVAUqbV7tpUd9v7CUuCuchhw001Fx6Azjv');
            Stripe::setApikey('sk_test_51GsTPmKLPfQ86kQCC69kxmKU0kwDg9ajZkJpIbvx5pmI8vlUGRstw4CeiqEYF4kqJVAUqbV7tpUd9v7CUuCuchhw001Fx6Azjv');
            $intent = PaymentIntent::create([
                'amount' => $product->getPrice() * 100,
                'currency' => 'eur',
                'payment_method_types' => ['card'],
                'metadata' => [
                    'order_id' => '6735',
                ],
            ]);


            $user = $security->getUser();
            $user->setFormuleSport($product);
            $user->setReglement('oui');
            $entityManager->flush();

            return new RedirectResponse($urlGenerator->generate('programme_sport_inscription'));
        }

        return $paiementControlPresenter->present(new PaiementControlResponder($product, $intentPrePay));
    }
}
