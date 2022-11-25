<?php

namespace App\Entity;

use App\Repository\ManifSalleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ManifSalleRepository::class)]
class ManifSalle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'manifSalles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Manif $category = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategory(): ?Manif
    {
        return $this->category;
    }

    public function setCategory(?Manif $category): self
    {
        $this->category = $category;

        return $this;
    }
}
