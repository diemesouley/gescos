<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FactureRepository")
 */
class Facture
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateFact;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Commande", mappedBy="facture")
     */
    private $Commande;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Produits", mappedBy="facture")
     */
    private $Produits;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LigneSortie", mappedBy="facture")
     */
    private $LigneSortie;

    public function __construct()
    {
        $this->Commande = new ArrayCollection();
        $this->Produits = new ArrayCollection();
        $this->LigneSortie = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateFact(): ?\DateTimeInterface
    {
        return $this->dateFact;
    }

    public function setDateFact(\DateTimeInterface $dateFact): self
    {
        $this->dateFact = $dateFact;

        return $this;
    }

    /**
     * @return Collection|Commande[]
     */
    public function getCommande(): Collection
    {
        return $this->Commande;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->Commande->contains($commande)) {
            $this->Commande[] = $commande;
            $commande->setFacture($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        if ($this->Commande->contains($commande)) {
            $this->Commande->removeElement($commande);
            // set the owning side to null (unless already changed)
            if ($commande->getFacture() === $this) {
                $commande->setFacture(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Produits[]
     */
    public function getProduits(): Collection
    {
        return $this->Produits;
    }

    public function addProduit(Produits $produit): self
    {
        if (!$this->Produits->contains($produit)) {
            $this->Produits[] = $produit;
            $produit->setFacture($this);
        }

        return $this;
    }

    public function removeProduit(Produits $produit): self
    {
        if ($this->Produits->contains($produit)) {
            $this->Produits->removeElement($produit);
            // set the owning side to null (unless already changed)
            if ($produit->getFacture() === $this) {
                $produit->setFacture(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|LigneSortie[]
     */
    public function getLigneSortie(): Collection
    {
        return $this->LigneSortie;
    }

    public function addLigneSortie(LigneSortie $ligneSortie): self
    {
        if (!$this->LigneSortie->contains($ligneSortie)) {
            $this->LigneSortie[] = $ligneSortie;
            $ligneSortie->setFacture($this);
        }

        return $this;
    }

    public function removeLigneSortie(LigneSortie $ligneSortie): self
    {
        if ($this->LigneSortie->contains($ligneSortie)) {
            $this->LigneSortie->removeElement($ligneSortie);
            // set the owning side to null (unless already changed)
            if ($ligneSortie->getFacture() === $this) {
                $ligneSortie->setFacture(null);
            }
        }

        return $this;
    }
}
