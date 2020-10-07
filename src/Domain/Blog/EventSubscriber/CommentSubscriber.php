<?php

namespace App\Domain\Blog\EventSubscriber;



use App\Application\Entity\Comment;
use App\Infrastructure\Event\ReverseEvent;
use App\Infrastructure\Event\TransfertEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Security;

class CommentSubscriber implements EventSubscriberInterface
{

    /**
     * @var Security
     */
    private Security $security;

    /**
     * CommentSubscriber constructor.
     * @param Security $security
     */
    public function __construct(Security $security)
    {
        $this->security = $security;
    }


    public static function getSubscribedEvents()
    {
        return [
            TransfertEvent::NAME => "onTransfertComment",
            ReverseEvent::NAME => "onReverseComment"
        ];
    }

    public function onTransfertComment(TransfertEvent $event): void
    {
        if (!$event->getOriginalData() instanceof Comment) {
            return;
        }

        $event->getData()->setAuthor($event->getOriginalData()->getAuthor());
        $event->getData()->setContent($event->getOriginalData()->getContent());

    }

    public function onReverseComment(ReverseEvent $event): void
    {

        if (!$event->getOriginalData() instanceof Comment) {
            return;
        }

        if ($this->security->isGranted("ROLE_USER") || $this->security->isGranted(("ROLE_ADMIN"))) {
            $event->getOriginalData()->setUser($this->security->getUser());
        }

        $event->getOriginalData()->setAuthor($event->getData()->getAuthor());
        $event->getOriginalData()->setContent($event->getData()->getContent());

    }
}