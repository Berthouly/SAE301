<?php

namespace App\Entity;

use App\Repository\PanierDetailRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PanierDetailRepository::class)]
class PanierDetail
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $article = null;

    #[ORM\Column(length: 255)]
    private ?string $quantite = null;

    #[ORM\Column(length: 255)]
    private ?string $prix = null;

    #[ORM\ManyToOne(inversedBy: 'panierDetails')]
    private ?DataUser $data_user_CB = null;

    #[ORM\ManyToOne(inversedBy: 'panierDetails')]
    private ?DataUserPaypal $data_user_paypal = null;

    #[ORM\ManyToOne(inversedBy: 'panierDetails')]
    private ?Manif $manif_commande_id = null;

    #[ORM\ManyToOne(inversedBy: 'panierDetails')]
    private ?User $user_id = null;

    #[ORM\Column(length: 255)]
    private ?string $Commande = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticle(): ?string
    {
        return $this->article;
    }

    public function setArticle(string $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getQuantite(): ?string
    {
        return $this->quantite;
    }

    public function setQuantite(string $quantite): self
    {
        $this->quantite = $quantite;

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

    public function getDataUserCB(): ?DataUser
    {
        return $this->data_user_CB;
    }

    public function setDataUserCB(?DataUser $data_user_CB): self
    {
        $this->data_user_CB = $data_user_CB;

        return $this;
    }

    public function getDataUserPaypal(): ?DataUserPaypal
    {
        return $this->data_user_paypal;
    }

    public function setDataUserPaypal(?DataUserPaypal $data_user_paypal): self
    {
        $this->data_user_paypal = $data_user_paypal;

        return $this;
    }

    public function getManifCommandeId(): ?Manif
    {
        return $this->manif_commande_id;
    }

    public function setManifCommandeId(?Manif $manif_commande_id): self
    {
        $this->manif_commande_id = $manif_commande_id;

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

    public function getCommande(): ?string
    {
        return $this->Commande;
    }

    public function setCommande(string $Commande): self
    {
        $this->Commande = $Commande;

        return $this;
    }



}
