<?php

namespace App\Entity;

use App\Repository\DataUserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DataUserRepository::class)]
class DataUser
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
    private ?string $numero_carte = null;

    #[ORM\Column(length: 255)]
    private ?string $titulaire_carte = null;

    #[ORM\Column(length: 255)]
    private ?string $crypt = null;

    #[ORM\Column(length: 255)]
    private ?string $paypal_user = null;

    #[ORM\ManyToOne(inversedBy: 'dataUsers')]
    private ?User $user = null;


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

    public function getNumeroCarte(): ?string
    {
        return $this->numero_carte;
    }

    public function setNumeroCarte(string $numero_carte): self
    {
        $this->numero_carte = $numero_carte;

        return $this;
    }

    public function getTitulaireCarte(): ?string
    {
        return $this->titulaire_carte;
    }

    public function setTitulaireCarte(string $titulaire_carte): self
    {
        $this->titulaire_carte = $titulaire_carte;

        return $this;
    }

    public function getCrypt(): ?string
    {
        return $this->crypt;
    }

    public function setCrypt(string $crypt): self
    {
        $this->crypt = $crypt;

        return $this;
    }

    public function getPaypalUser(): ?string
    {
        return $this->paypal_user;
    }

    public function setPaypalUser(string $paypal_user): self
    {
        $this->paypal_user = $paypal_user;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
