<?php

namespace App\Domain\Sport\Controller;

use App\Application\Entity\Human;
use App\Domain\Sport\Presenter\PageProgrammePresenterInterface;
use App\Domain\Sport\Responder\PageProgrammeResponder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\SerializerInterface;

class PageProgramme
{
    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param PageProgrammePresenterInterface $pageProgrammePresenter
     * @param Security $security
     * @param UrlGeneratorInterface $urlGenerator
     * @param SerializerInterface $serializer
     * @param Filesystem $filesystem
     * @return Response
     */
    public function __invoke(Request $request,
                             EntityManagerInterface $entityManager,
                             PageProgrammePresenterInterface $pageProgrammePresenter,
                             Security $security,
                             UrlGeneratorInterface $urlGenerator,
                             SerializerInterface $serializer,
                             Filesystem $filesystem): Response
    {
        $human = $entityManager->getRepository(Human::class)->findOneBy(['user' => $security->getUser()->getId()]);

        if (!$filesystem->exists("../src/Application/FileControlHuman/human{$human->getId()}.json")) {
            $humanJson = $serializer->serialize(
                $human,
                'json',
                [
                    'circular_reference_handler' => function ($object) {
                        return $object->getId();
                    },
                ]
            );
            $humanJsonTraficed = sprintf('%s', $humanJson);
            $filesystem->appendToFile("../src/Application/FileControlHuman/human{$human->getId()}.json", $humanJsonTraficed);
        }

        $menuStr = $human->getMenu();
        $programsStr = $human->getSportProgram();

        $dateNextControl = $human->getDateNextControl();

        $dayDate = new \DateTimeImmutable();

        if ($dayDate->getTimestamp() > $dateNextControl->getTimestamp()) {
            return $pageProgrammePresenter->redirect($urlGenerator);
        }

        return $pageProgrammePresenter->present(new PageProgrammeResponder($human, $programsStr, $menuStr));
    }
}
