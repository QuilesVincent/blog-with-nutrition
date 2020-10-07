<?php


namespace App\Domain\Api\Controller;


use App\Application\Entity\Comment;
use Symfony\Component\Security\Core\Security;

class CommentCreateController
{

    private Security $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function __invoke(Comment $data)
    {
        $data->setUser($this->security->getUser());
        return $data;
    }

}