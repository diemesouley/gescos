<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LigneSortieRepository")
 */
class LigneSortie
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
    private $quantiteSortie;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Commande", inversedBy="LigneSortie")
     */
    private $commande;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Produits", inversedBy="LigneSortie")
     */
    private $produits;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Facture", inversedBy="LigneSortie")
     */
    private $facture;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantiteSortie(): ?int
    {
        return $this->quantiteSortie;
    }

    public function setQuantiteSortie(?int $quantiteSortie): self
    {
        $this->quantiteSortie = $quantiteSortie;

        return $this;
    }

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): self
    {
        $this->commande = $commande;

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

    public function getFacture(): ?Facture
    {
        return $this->facture;
    }

    public function setFacture(?Facture $facture): self
    {
        $this->facture = $facture;

        return $this;
    }
}
