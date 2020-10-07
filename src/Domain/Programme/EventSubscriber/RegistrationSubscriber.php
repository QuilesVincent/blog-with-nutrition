<?php


namespace App\Domain\Programme\EventSubscriber;


use App\Application\Entity\User;
use App\Infrastructure\Event\ReverseEvent;
use App\Infrastructure\Event\TransfertEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;

class RegistrationSubscriber implements EventSubscriberInterface
{

    /**
     * @var UserPasswordEncoderInterface
     */
    private UserPasswordEncoderInterface $userPasswordEncoder;

    /**
     * @var Security
     */
    private Security $security;

    /**
     * RegistrationSubscriberSport constructor.
     * @param UserPasswordEncoderInterface $userPasswordEncoder
     * @param Security $security
     */
    public function __construct(UserPasswordEncoderInterface $userPasswordEncoder, Security $security)
    {
        $this->userPasswordEncoder = $userPasswordEncoder;
        $this->security = $security;
    }


    public static function getSubscribedEvents()
    {
        return [
            TransfertEvent::NAME => "onTransfertRegistration",
            ReverseEvent::NAME => "onReverseRegistration"
        ];
    }

    public function onTransfertRegistration(TransfertEvent $event): void
    {
        return;

    }

    public function onReverseRegistration(ReverseEvent $event): void
    {

        if (!$event->getOriginalData() instanceof User) {
            return;
        }

        $event->getOriginalData()->setFirstName($event->getData()->getFirstName());
        $event->getOriginalData()->setLastName($event->getData()->getLastName());
        $event->getOriginalData()->setUsername($event->getData()->getUsername());
        $event->getOriginalData()->setTypeCompte("admin");
        $event->getOriginalData()->setPassword(
            $this->userPasswordEncoder->encodePassword($event->getOriginalData(),$event->getData()->getPassword())
        );
        $event->getOriginalData()->setSecretQuestion($event->getData()->getSecretQuestion());
        $event->getOriginalData()->setSecretQuestionAnswer($event->getData()->getSecretQuestionAnswer());

    }
}