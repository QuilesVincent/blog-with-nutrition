<?php


namespace App\Domain\Programme\Handler;


use App\Domain\Programme\DataTransfertObject\User;
use App\Domain\Programme\Form\InscriptionUserType;
use App\Infrastructure\Handler\AbstractHandler;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class HumanHandler
 * @package App\Domain\Programme\Handler
 */
class RegistrationHandler extends AbstractHandler
{


    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $entityManager;

    /**
     * HumanHandler constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    protected function getDataTransfertObject(): object
    {
        return new User();
    }

    protected function process($data): void
    {
        $this->entityManager->persist($data);
        $this->entityManager->flush();
    }

    protected function getFormType(): string
    {
        return InscriptionUserType::class;
    }
}