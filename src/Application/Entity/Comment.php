<?php

namespace App\Application\Entity;

use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * @ORM\Entity(repositoryClass="App\Application\Repository\CommentRepository")
 */
class Comment
{
    /**
     * @var int|null
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"read:comment","detail","fullInfo","admin"})
     */
    private ?int $id;


    /**
     * @var string|null
     * @ORM\Column(nullable=true)
     * @Assert\NotBlank(groups={"anonymous"})
     * @Assert\Length(min=2, groups={"anonymous"})
     * @Groups({"read:comment","detail","fullInfo","admin"})
     */
    private ?string  $author = null;


    /**
     * @var string|null
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     * @Assert\Length(min=5)
     * @Groups({"read:comment","detail","fullInfo","admin"})
     */
    private ?string $content = null;

    /**
     * @var DateTimeImmutable
     * @ORM\Column(type="datetime_immutable")
     * @Groups({"read:comment","detail","fullInfo","admin"})
     */
    private DateTimeImmutable $postedAt;

    /**
     * @var Article
     * @ORM\ManyToOne(targetEntity="Article", inversedBy="comment")
     * @Groups({"read:comment","fullInfo","admin"})
     */
    private Article $article;

    /**
     * @var UserInterface|null
     * @ORM\ManyToOne(targetEntity="User")
     * @Groups({"fullInfo","admin"})
     */
    private ?UserInterface $user = null;


    /**
     * Post constructor.
     * @throws \Exception
     */
    public function __construct()
    {
        $this->postedAt = new DateTimeImmutable();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * @param string|null $author
     */
    public function setAuthor(?string $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string|null $content
     */
    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return Article
     */
    public function getArticle(): Article
    {
        return $this->article;
    }

    /**
     * @param Article $article
     */
    public function setArticle(Article $article): void
    {
        $this->article = $article;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getPostedAt(): DateTimeImmutable
    {
        return $this->postedAt;
    }

    /**
     * @param DateTimeImmutable $postedAt
     */
    public function setPostedAt(DateTimeImmutable $postedAt): void
    {
        $this->postedAt = $postedAt;
    }

    /**
     * @return UserInterface|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param UserInterface|null $user
     */
    public function setUser(?UserInterface $user): void
    {
        $this->user = $user;
    }


}
