<?php

namespace App\Entity;

use App\Repository\DataUserPaypalRepository;
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
}
