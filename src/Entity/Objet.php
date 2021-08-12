<?php

namespace App\Entity;

use App\Repository\ObjetRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ApiResource (formats= {"json"})
 * @ORM\Entity(repositoryClass=ObjetRepository::class)
 * @UniqueEntity(
 *     fields={"username", "username"},
 *     errorPath="usename",
 *     message="This usename is already in use on that host."
 * )
 */
class Objet
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $ceatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getCeatedAt(): ?\DateTimeImmutable
    {
        return $this->ceatedAt;
    }

    public function setCeatedAt(\DateTimeImmutable $ceatedAt): self
    {
        $this->ceatedAt = $ceatedAt;

        return $this;
    }
}
