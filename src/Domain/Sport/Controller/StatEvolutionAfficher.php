<?php


namespace App\Domain\Sport\Controller;


use App\Application\Entity\Human;
use App\Domain\Sport\Presenter\StatEvolutionAfficherPresenterInterface;
use App\Domain\Sport\Responder\StatEvolutionAfficherResponder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\SerializerInterface;

class StatEvolutionAfficher
{

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param Security $security
     * @param SerializerInterface $serializer
     * @param Filesystem $filesystem
     * @param StatEvolutionAfficherPresenterInterface $statEvolutionAfficherPresenter
     */
    public function __invoke(Request $request,
                             EntityManagerInterface $entityManager,
                             Security $security,
                             SerializerInterface $serializer,
                             Filesystem $filesystem,
                             StatEvolutionAfficherPresenterInterface $statEvolutionAfficherPresenter)
    {
        $human = $entityManager->getRepository(Human::class)->findOneBy(["user" => $security->getUser()->getId()]);
        $file = new File("../src/Application/FileControlHuman/human{$human->getId()}.json");
        $contentFile = \file_get_contents($file);
        $newHuman = $serializer->deserialize($contentFile, Human::class, "json");

        return $statEvolutionAfficherPresenter->present(new StatEvolutionAfficherResponder($newHuman));
    }

}