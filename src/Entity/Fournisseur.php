<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FournisseurRepository")
 */
class Fournisseur
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
    private $nomFournisseur;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $adresseFournisseur;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $emailFournisseur;

    /**
     * @ORM\Column(type="integer")
     */
    private $telFournisseur;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LigneProduit", mappedBy="fournisseur")
     */
    private $LigneProduit;

    public function __construct()
    {
        $this->LigneProduit = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFournisseur(): ?string
    {
        return $this->nomFournisseur;
    }

    public function setNomFournisseur(string $nomFournisseur): self
    {
        $this->nomFournisseur = $nomFournisseur;

        return $this;
    }

    public function getAdresseFournisseur(): ?string
    {
        return $this->adresseFournisseur;
    }

    public function setAdresseFournisseur(string $adresseFournisseur): self
    {
        $this->adresseFournisseur = $adresseFournisseur;

        return $this;
    }

    public function getEmailFournisseur(): ?string
    {
        return $this->emailFournisseur;
    }

    public function setEmailFournisseur(?string $emailFournisseur): self
    {
        $this->emailFournisseur = $emailFournisseur;

        return $this;
    }

    public function getTelFournisseur(): ?int
    {
        return $this->telFournisseur;
    }

    public function setTelFournisseur(int $telFournisseur): self
    {
        $this->telFournisseur = $telFournisseur;

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
            $ligneProduit->setFournisseur($this);
        }

        return $this;
    }

    public function removeLigneProduit(LigneProduit $ligneProduit): self
    {
        if ($this->LigneProduit->contains($ligneProduit)) {
            $this->LigneProduit->removeElement($ligneProduit);
            // set the owning side to null (unless already changed)
            if ($ligneProduit->getFournisseur() === $this) {
                $ligneProduit->setFournisseur(null);
            }
        }

        return $this;
    }
}
