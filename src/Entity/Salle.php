<?php

namespace App\Entity;
use App\Repository\SalleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SalleRepository::class)]
class Salle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $capacite = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse_rue = null;

  



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCapacite(): ?string
    {
        return $this->capacite;
    }

    public function setCapacite(string $capacite): self
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getAdresseRue(): ?string
    {
        return $this->adresse_rue;
    }

    public function setAdresseRue(string $adresse_rue): self
    {
        $this->adresse_rue = $adresse_rue;

        return $this;
    }   


    public function __toString(): string
    {
        return $this->nom;
    }

    /**
     * @return Collection<int, Manif>
     */
    public function getManifs(): Collection
    {
        return $this->manifs;
    }

    public function addManif(Manif $manif): self
    {
        if (!$this->manifs->contains($manif)) {
            $this->manifs->add($manif);
            $manif->setSalle($this);
        }

        return $this;
    }

    public function removeManif(Manif $manif): self
    {
        if ($this->manifs->removeElement($manif)) {
            // set the owning side to null (unless already changed)
            if ($manif->getSalle() === $this) {
                $manif->setSalle(null);
            }
        }

        return $this;
    } 
  

}
