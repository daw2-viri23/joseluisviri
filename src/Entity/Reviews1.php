<?php

namespace App\Entity;

use App\Repository\Reviews1Repository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Reviews1Repository::class)]
class Reviews1
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $book_id = null;

    #[ORM\Column(length: 255)]
    private ?string $reviewer_name = null;

    #[ORM\Column(length: 255)]
    private ?string $content = null;

    #[ORM\Column]
    private ?int $rating = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $published_data = null;

    #[ORM\Column(type: Types::DATE)]  // Nueva propiedad
    private ?\DateTimeInterface $publishingDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBookId(): ?int
    {
        return $this->book_id;
    }

    public function setBookId(int $book_id): self
    {
        $this->book_id = $book_id;

        return $this;
    }

    public function getReviewerName(): ?string
    {
        return $this->reviewer_name;
    }

    public function setReviewerName(string $reviewer_name): self
    {
        $this->reviewer_name = $reviewer_name;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getPublishedData(): ?\DateTimeInterface
    {
        return $this->published_data;
    }

    public function setPublishedData(\DateTimeInterface $published_data): self
    {
        $this->published_data = $published_data;

        return $this;
    }

    // Getter y Setter para la nueva propiedad "publishingDate"
    public function getPublishingDate(): ?\DateTimeInterface
    {
        return $this->publishingDate;
    }

    public function setPublishingDate(\DateTimeInterface $publishingDate): self
    {
        $this->publishingDate = $publishingDate;

        return $this;
    }
}

