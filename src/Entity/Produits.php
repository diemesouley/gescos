<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduitsRepository")
 */
class Produits
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $libProduit;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $descripProduit;

    /**
     * @ORM\Column(type="integer")
     */
    private $prixProduit;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantiteDispoProduit;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateAjout;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", inversedBy="Produits")
     */
    private $categorie;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LigneSortie", mappedBy="produits")
     */
    private $LigneSortie;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LigneProduit", mappedBy="produits")
     */
    private $LigneProduit;

    public function __construct()
    {
        $this->LigneSortie = new ArrayCollection();
        $this->LigneProduit = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibProduit(): ?string
    {
        return $this->libProduit;
    }

    public function setLibProduit(string $libProduit): self
    {
        $this->libProduit = $libProduit;

        return $this;
    }

    public function getDescripProduit(): ?string
    {
        return $this->descripProduit;
    }

    public function setDescripProduit(string $descripProduit): self
    {
        $this->descripProduit = $descripProduit;

        return $this;
    }

    public function getPrixProduit(): ?int
    {
        return $this->prixProduit;
    }

    public function setPrixProduit(int $prixProduit): self
    {
        $this->prixProduit = $prixProduit;

        return $this;
    }

    public function getQuantiteDispoProduit(): ?int
    {
        return $this->quantiteDispoProduit;
    }

    public function setQuantiteDispoProduit(int $quantiteDispoProduit): self
    {
        $this->quantiteDispoProduit = $quantiteDispoProduit;

        return $this;
    }

    
    public function getDateAjout(): ?\DateTimeInterface
    {
        return $this->dateAjout;
    }

    public function setDateAjout(?\DateTimeInterface $dateAjout): self
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

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
            $ligneSortie->setProduits($this);
        }

        return $this;
    }

    public function removeLigneSortie(LigneSortie $ligneSortie): self
    {
        if ($this->LigneSortie->contains($ligneSortie)) {
            $this->LigneSortie->removeElement($ligneSortie);
            // set the owning side to null (unless already changed)
            if ($ligneSortie->getProduits() === $this) {
                $ligneSortie->setProduits(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|LigneProduit[]
     */
    public function getLigneProduit(): Collection
    {
        return $this->LigneProduit;
    }

    public function addLigneProduit(LigneProduit $ligneProduit): self
    {
        if (!$this->LigneProduit->contains($ligneProduit)) {
            $this->LigneProduit[] = $ligneProduit;
            $ligneProduit->setProduits($this);
        }

        return $this;
    }

    public function removeLigneProduit(LigneProduit $ligneProduit): self
    {
        if ($this->LigneProduit->contains($ligneProduit)) {
            $this->LigneProduit->removeElement($ligneProduit);
            // set the owning side to null (unless already changed)
            if ($ligneProduit->getProduits() === $this) {
                $ligneProduit->setProduits(null);
            }
        }

        return $this;
    }
}
