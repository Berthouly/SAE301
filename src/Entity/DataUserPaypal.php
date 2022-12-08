<?php

namespace App\Entity;

use App\Repository\DataUserPaypalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DataUserPaypalRepository::class)]
class DataUserPaypal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $numero = null;

    #[ORM\Column(length: 255)]
    private ?string $Paypal_User = null;

    #[ORM\ManyToOne(inversedBy: 'dataUserPaypals')]
    private ?User $user_id = null;

    #[ORM\OneToMany(mappedBy: 'data_user_paypal', targetEntity: PanierDetail::class)]
    private Collection $panierDetails;

    #[ORM\ManyToOne(inversedBy: 'dataUserPaypals')]
    private ?Manif $manif_id = null;

    public function __construct()
    {
        $this->panierDetails = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getPaypalUser(): ?string
    {
        return $this->Paypal_User;
    }

    public function setPaypalUser(string $Paypal_User): self
    {
        $this->Paypal_User = $Paypal_User;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->user_id;
    }

    public function setUserId(?User $user_id): self
    {
        $this->user_id = $user_id;

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
            $panierDetail->setDataUserPaypal($this);
        }

        return $this;
    }

    public function removePanierDetail(PanierDetail $panierDetail): self
    {
        if ($this->panierDetails->removeElement($panierDetail)) {
            // set the owning side to null (unless already changed)
            if ($panierDetail->getDataUserPaypal() === $this) {
                $panierDetail->setDataUserPaypal(null);
            }
        }

        return $this;
    }

    public function getManifId(): ?Manif
    {
        return $this->manif_id;
    }

    public function setManifId(?Manif $manif_id): self
    {
        $this->manif_id = $manif_id;

        return $this;
    }
}
