<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NouvCommFournisseurRepository")
 */
class NouvCommFournisseur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateEntre;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantiteEntre;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", inversedBy="NouvCommFournisseur")
     */
    private $categorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateEntre(): ?\DateTimeInterface
    {
        return $this->dateEntre;
    }

    public function setDateEntre(?\DateTimeInterface $dateEntre): self
    {
        $this->dateEntre = $dateEntre;

        return $this;
    }

    public function getQuantiteEntre(): ?int
    {
        return $this->quantiteEntre;
    }

    public function setQuantiteEntre(int $quantiteEntre): self
    {
        $this->quantiteEntre = $quantiteEntre;

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
}
