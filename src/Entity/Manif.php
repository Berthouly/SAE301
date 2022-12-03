<?php

namespace App\Entity;

use App\Repository\ManifRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;



#[ORM\Entity(repositoryClass: ManifRepository::class)]

class Manif
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $genre = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $affiche = null;

    #[ORM\Column(length: 3000)]
    private ?string $descript = null;

    #[ORM\Column(length: 255)]
    private ?string $casting = null;

    #[ORM\Column(length: 255)]
    private ?string $prix = null;

    #[ORM\Column(length: 255)]
    private ?string $date = null;

    #[ORM\Column(length: 255)]
    private ?string $horaire = null;

    #[ORM\ManyToOne(inversedBy: 'manifs')]
    private ?Salle $Salle = null;

    #[ORM\OneToMany(mappedBy: 'manif_id', targetEntity: PanierDetail::class)]
    private Collection $panierDetails;

    public function __construct()
    {
        $this->panierDetails = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAffiche(): ?string
    {
        return $this->affiche;
    }

    public function setAffiche(string $affiche): self
    {
        $this->affiche = $affiche;

        return $this;
    }

    public function getDescript(): ?string
    {
        return $this->descript;
    }

    public function setDescript(string $descript): self
    {
        $this->descript = $descript;

        return $this;
    }

    public function getCasting(): ?string
    {
        return $this->casting;
    }

    public function setCasting(string $casting): self
    {
        $this->casting = $casting;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getHoraire(): ?string
    {
        return $this->horaire;
    }

    public function setHoraire(string $horaire): self
    {
        $this->horaire = $horaire;

        return $this;
    }

    public function getSalle(): ?Salle
    {
        return $this->Salle;
    }

    public function setSalle(?Salle $Salle): self
    {
        $this->Salle = $Salle;

        return $this;
    }

    /**
     * @return Collection<int, PanierDetail>
     */
    public function getPanierDetails(): Collection
    {
        return $this->panierDetails;
    }

    public function addPanierDetail(PanierDetail $panierDetail): self
    {
        if (!$this->panierDetails->contains($panierDetail)) {
            $this->panierDetails->add($panierDetail);
            $panierDetail->setManifId($this);
        }

        return $this;
    }

    public function removePanierDetail(PanierDetail $panierDetail): self
    {
        if ($this->panierDetails->removeElement($panierDetail)) {
            // set the owning side to null (unless already changed)
            if ($panierDetail->getManifId() === $this) {
                $panierDetail->setManifId(null);
            }
        }

        return $this;
    }

    


}
