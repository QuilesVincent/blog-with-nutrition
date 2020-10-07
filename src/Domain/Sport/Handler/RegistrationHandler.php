<?php


namespace App\Domain\Sport\Handler;


use App\Domain\Programme\DataTransfertObject\User;
use App\Domain\Sport\Form\InscriptionUtilisateur;
use App\Infrastructure\Handler\AbstractHandler;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class HumanHandler
 * @package App\Domain\Sport\Handler
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
        return InscriptionUtilisateur::class;
    }
}