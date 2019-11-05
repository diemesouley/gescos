<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommandeRepository")
 */
class Commande
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
    private $dateCommande;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $etatCommande;

    /**
     * @ORM\Column(type="float")
     */
    private $prixTotatlCommande;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Clients", inversedBy="commandes")
     */
    private $Clients;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Facture", inversedBy="Commande")
     */
    private $facture;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LigneSortie", mappedBy="commande")
     */
    private $LigneSortie;

    public function __construct()
    {
        $this->LigneSortie = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->dateCommande;
    }

    public function setDateCommande(\DateTimeInterface $dateCommande): self
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    public function getEtatCommande(): ?string
    {
        return $this->etatCommande;
    }

    public function setEtatCommande(string $etatCommande): self
    {
        $this->etatCommande = $etatCommande;

        return $this;
    }

    public function getPrixTotatlCommande(): ?float
    {
        return $this->prixTotatlCommande;
    }

    public function setPrixTotatlCommande(float $prixTotatlCommande): self
    {
        $this->prixTotatlCommande = $prixTotatlCommande;

        return $this;
    }

    public function getClients(): ?Clients
    {
        return $this->Clients;
    }

    public function setClients(?Clients $Clients): self
    {
        $this->Clients = $Clients;

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
            $ligneSortie->setCommande($this);
        }

        return $this;
    }

    public function removeLigneSortie(LigneSortie $ligneSortie): self
    {
        if ($this->LigneSortie->contains($ligneSortie)) {
            $this->LigneSortie->removeElement($ligneSortie);
            // set the owning side to null (unless already changed)
            if ($ligneSortie->getCommande() === $this) {
                $ligneSortie->setCommande(null);
            }
        }

        return $this;
    }
}
