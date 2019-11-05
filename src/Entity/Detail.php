<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DetailRepository")
 */
class Detail
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", inversedBy="details")
     */
    private $Categorie;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Type", inversedBy="details")
     */
    private $Type;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nomDetail;

    public function __construct()
    {
        $this->Type = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->Categorie;
    }

    public function setCategorie(?Categorie $Categorie): self
    {
        $this->Categorie = $Categorie;

        return $this;
    }

    /**
     * @return Collection|Type[]
     */
    public function getType(): Collection
    {
        return $this->Type;
    }

    public function addType(Type $type): self
    {
        if (!$this->Type->contains($type)) {
            $this->Type[] = $type;
        }

        return $this;
    }

    public function removeType(Type $type): self
    {
        if ($this->Type->contains($type)) {
            $this->Type->removeElement($type);
        }

        return $this;
    }

    public function getNomDetail(): ?string
    {
        return $this->nomDetail;
    }

    public function setNomDetail(string $nomDetail): self
    {
        $this->nomDetail = $nomDetail;

        return $this;
    }
}
