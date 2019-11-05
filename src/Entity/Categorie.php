<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategorieRepository")
 */
class Categorie
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
    private $libCategorie;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $Detail;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Detail", mappedBy="Categorie")
     */
    private $details;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Produits", mappedBy="categorie")
     */
    private $Produits;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\NouvCommFournisseur", mappedBy="categorie")
     */
    private $NouvCommFournisseur;

    public function __construct()
    {
        $this->details = new ArrayCollection();
        $this->Produits = new ArrayCollection();
        $this->NouvCommFournisseur = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibCategorie(): ?string
    {
        return $this->libCategorie;
    }

    public function setLibCategorie(string $libCategorie): self
    {
        $this->libCategorie = $libCategorie;

        return $this;
    }

    public function getDetail(): ?string
    {
        return $this->Detail;
    }

    public function setDetail(string $Detail): self
    {
        $this->Detail = $Detail;

        return $this;
    }

    /**
     * @return Collection|Detail[]
     */
    public function getDetails(): Collection
    {
        return $this->details;
    }

    public function addDetail(Detail $detail): self
    {
        if (!$this->details->contains($detail)) {
            $this->details[] = $detail;
            $detail->setCategorie($this);
        }

        return $this;
    }

    public function removeDetail(Detail $detail): self
    {
        if ($this->details->contains($detail)) {
            $this->details->removeElement($detail);
            // set the owning side to null (unless already changed)
            if ($detail->getCategorie() === $this) {
                $detail->setCategorie(null);
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
            $produit->setCategorie($this);
        }

        return $this;
    }

    public function removeProduit(Produits $produit): self
    {
        if ($this->Produits->contains($produit)) {
            $this->Produits->removeElement($produit);
            // set the owning side to null (unless already changed)
            if ($produit->getCategorie() === $this) {
                $produit->setCategorie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|NouvCommFournisseur[]
     */
    public function getNouvCommFournisseur(): Collection
    {
        return $this->NouvCommFournisseur;
    }

    public function addNouvCommFournisseur(NouvCommFournisseur $nouvCommFournisseur): self
    {
        if (!$this->NouvCommFournisseur->contains($nouvCommFournisseur)) {
            $this->NouvCommFournisseur[] = $nouvCommFournisseur;
            $nouvCommFournisseur->setCategorie($this);
        }

        return $this;
    }

    public function removeNouvCommFournisseur(NouvCommFournisseur $nouvCommFournisseur): self
    {
        if ($this->NouvCommFournisseur->contains($nouvCommFournisseur)) {
            $this->NouvCommFournisseur->removeElement($nouvCommFournisseur);
            // set the owning side to null (unless already changed)
            if ($nouvCommFournisseur->getCategorie() === $this) {
                $nouvCommFournisseur->setCategorie(null);
            }
        }

        return $this;
    }
}
