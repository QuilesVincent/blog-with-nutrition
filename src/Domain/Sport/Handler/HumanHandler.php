<?php


namespace App\Domain\Sport\Handler;


use App\Domain\Sport\DataTransfertObject\Human;
use App\Domain\Sport\Form\ControlResultForm;
use App\Domain\Sport\Form\InscriptionUserType;
use App\Infrastructure\Handler\AbstractHandler;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\UnitOfWork;

/**
 * Class HumanHandler
 * @package App\Domain\Sport\Handler
 */
class HumanHandler extends AbstractHandler
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

    public function getDataTransfertObject(): object
    {
        return new Human();
    }

    public function process($data): void
    {
        if ($this->entityManager->getUnitOfWork()->getEntityState($data) === UnitOfWork::STATE_NEW) {
            $this->entityManager->persist($data);
        }

        $this->entityManager->flush();
    }

    public function getFormType(): string
    {
        return InscriptionUserType::class;
    }
}