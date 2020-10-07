<?php


namespace App\Domain\Sport\EventSubscriber;


use App\Application\Entity\Human;
use App\Infrastructure\Event\ReverseEvent;
use App\Infrastructure\Event\TransfertEvent;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\UnitOfWork;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;

class RegistrationSubscriberSport implements EventSubscriberInterface
{

    /**
     * @var UserPasswordEncoderInterface
     */
    private UserPasswordEncoderInterface $userPasswordEncoder;

    /**
     * @var Security
     */
    private Security $security;

    private EntityManagerInterface $entityManager;

    /**
     * RegistrationSubscriberSport constructor.
     * @param UserPasswordEncoderInterface $userPasswordEncoder
     * @param Security $security
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(UserPasswordEncoderInterface $userPasswordEncoder,
                                Security $security,
                                EntityManagerInterface $entityManager)
    {
        $this->userPasswordEncoder = $userPasswordEncoder;
        $this->security = $security;
        $this->entityManager = $entityManager;

    }


    public static function getSubscribedEvents()
    {
        //Changer transferEvent par un nom bien précis de classe qui sera créer pour chaque event (cf grafikart https://github.com/Grafikart/Grafikart.fr/blob/master/src/Domain/Auth/Subscriber/LoginAttemptSubscriber.php)
        //Qui extends peut être de TransfertEvent et ReverseEvent
        return [
            TransfertEvent::NAME => "onTransfertRegistrationSport",
            ReverseEvent::NAME => "onReverseRegistrationSport"
        ];
    }

    public function onTransfertRegistrationSport(TransfertEvent $event): void
    {
        if (!$event->getOriginalData() instanceof Human) {
            return;
        }

        $event->getData()->setWeightControlLastWeek($event->getOriginalData()->getWeightControlLastWeek());
        $event->getData()->setAge($event->getOriginalData()->getAge());
        $event->getData()->setSex($event->getOriginalData()->getSex());
        $event->getData()->setWeight($event->getOriginalData()->getWeight());
        $event->getData()->setSize($event->getOriginalData()->getSize());
        $event->getData()->setChestSize($event->getOriginalData()->getChestSize());
        $event->getData()->setWaistSize($event->getOriginalData()->getWaistSize());
        $event->getData()->setLegCircumference($event->getOriginalData()->getLegCircumference());
        $event->getData()->setIntolerance($event->getOriginalData()->getIntolerance());
        $event->getData()->setAllergy($event->getOriginalData()->getAllergy());
        $event->getData()->setFoodPreference($event->getOriginalData()->getFoodPreference());
        $event->getData()->setHealthProblem($event->getOriginalData()->getHealthProblem());
        $event->getData()->setWorkType($event->getOriginalData()->getWorkType());
        $event->getData()->setGoalType($event->getOriginalData()->getGoalType());
        $event->getData()->setSportInThePast($event->getOriginalData()->getSportInThePast());
        $event->getData()->setLevelOfPhysicalActivity($event->getOriginalData()->getLevelOfPhysicalActivity());

        $event->getData()->setChestSizeControlLastWeek($event->getOriginalData()->getChestSizeControlLastWeek());
        $event->getData()->setWaistSizeControlLastWeek($event->getOriginalData()->getWaistSizeControlLastWeek());
        $event->getData()->setLegCircumferenceControlLastWeek($event->getOriginalData()->getLegCircumferenceControlLastWeek());


    }

    /**
     * @param ReverseEvent $event
     */
    public function onReverseRegistrationSport(ReverseEvent $event): void
    {

        if (!$event->getOriginalData() instanceof Human) {
            return;
        }


        $event->getOriginalData()->setWeightControlLastWeek($event->getData()->getWeightControlLastWeek());
        $event->getOriginalData()->setAge($event->getData()->getAge());
        $event->getOriginalData()->setSex($event->getData()->getSex());
        $event->getOriginalData()->setWeight($event->getData()->getWeight());
        $event->getOriginalData()->setSize($event->getData()->getSize());
        $event->getOriginalData()->setChestSize($event->getData()->getChestSize());
        $event->getOriginalData()->setWaistSize($event->getData()->getWaistSize());
        $event->getOriginalData()->setLegCircumference($event->getData()->getLegCircumference());
        $event->getOriginalData()->setIntolerance($event->getData()->getIntolerance());
        $event->getOriginalData()->setAllergy($event->getData()->getAllergy());
        $event->getOriginalData()->setFoodPreference($event->getData()->getFoodPreference());
        $event->getOriginalData()->setHealthProblem($event->getData()->getHealthProblem());
        $event->getOriginalData()->setWorkType($event->getData()->getWorkType());
        $event->getOriginalData()->setGoalType($event->getData()->getGoalType());
        $event->getOriginalData()->setSportInThePast($event->getData()->getSportInThePast());
        $event->getOriginalData()->setLevelOfPhysicalActivity($event->getData()->getLevelOfPhysicalActivity());

        $event->getOriginalData()->setMetabolism();
        $event->getOriginalData()->setCaloricMaintenance();
        $event->getOriginalData()->setTotalCaloriesNeeded();
        $event->getOriginalData()->setUser($this->security->getUser());
        $event->getOriginalData()->setDateLastControl();

        $event->getOriginalData()->setMenu();
        $event->getOriginalData()->setSportProgram();
        $event->getOriginalData()->setDateNextControl();

        $event->getOriginalData()->setChestSizeControlLastWeek($event->getData()->getChestSizeControlLastWeek());
        $event->getOriginalData()->setWaistSizeControlLastWeek($event->getData()->getWaistSizeControlLastWeek());
        $event->getOriginalData()->setLegCircumferenceControlLastWeek($event->getData()->getLegCircumferenceControlLastWeek());
    }

}