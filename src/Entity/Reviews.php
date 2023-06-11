<?php

namespace App\Entity;

use App\Repository\ReviewsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReviewsRepository::class)]
class Reviews
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $reviews1 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReviews1(): ?string
    {
        return $this->reviews1;
    }

    public function setReviews1(string $reviews1): self
    {
        $this->reviews1 = $reviews1;

        return $this;
    }
}
