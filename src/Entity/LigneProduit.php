<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LigneProduitRepository")
 */
class LigneProduit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantiteFourni;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateFourni;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Fournisseur", inversedBy="LigneProduit")
     */
    private $fournisseur;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Produits", inversedBy="LigneProduit")
     */
    private $produits;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantiteFourni(): ?int
    {
        return $this->quantiteFourni;
    }

    public function setQuantiteFourni(?int $quantiteFourni): self
    {
        $this->quantiteFourni = $quantiteFourni;

        return $this;
    }

    public function getDateFourni(): ?\DateTimeInterface
    {
        return $this->dateFourni;
    }

    public function setDateFourni(?\DateTimeInterface $dateFourni): self
    {
        $this->dateFourni = $dateFourni;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    public function getProduits(): ?Produits
    {
        return $this->produits;
    }

    public function setProduits(?Produits $produits): self
    {
        $this->produits = $produits;

        return $this;
    }
}
