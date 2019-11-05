<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateursRepository")
 */
class Utilisateurs
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nomUtilisateur;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $prenomUtilisateur;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $adresseUtilisateur;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $emailUtilisateur;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $telUtilisateur;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomUtilisateur(): ?string
    {
        return $this->nomUtilisateur;
    }

    public function setNomUtilisateur(string $nomUtilisateur): self
    {
        $this->nomUtilisateur = $nomUtilisateur;

        return $this;
    }

    public function getPrenomUtilisateur(): ?string
    {
        return $this->prenomUtilisateur;
    }

    public function setPrenomUtilisateur(string $prenomUtilisateur): self
    {
        $this->prenomUtilisateur = $prenomUtilisateur;

        return $this;
    }

    public function getAdresseUtilisateur(): ?string
    {
        return $this->adresseUtilisateur;
    }

    public function setAdresseUtilisateur(string $adresseUtilisateur): self
    {
        $this->adresseUtilisateur = $adresseUtilisateur;

        return $this;
    }

    public function getEmailUtilisateur(): ?string
    {
        return $this->emailUtilisateur;
    }

    public function setEmailUtilisateur(?string $emailUtilisateur): self
    {
        $this->emailUtilisateur = $emailUtilisateur;

        return $this;
    }

    public function getTelUtilisateur(): ?int
    {
        return $this->telUtilisateur;
    }

    public function setTelUtilisateur(?int $telUtilisateur): self
    {
        $this->telUtilisateur = $telUtilisateur;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
}
