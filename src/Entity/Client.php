<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;



    #[ORM\Column(length: 255)]
    private ?string $ClientName = null;

    #[ORM\Column(length: 255)]
    private ?string $ClientEmail = null;

    #[ORM\Column(length: 255)]
    private ?string $ClientPhone = null;



    #[ORM\Column(length: 255)]
    private ?string $ClientAddress = null;

    #[ORM\Column(length: 255)]
    private ?string $ClientCountry = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $Id): static
    {
        $this->Id = $Id;

        return $this;
    }

    public function getClientName(): ?string
    {
        return $this->ClientName;
    }

    public function setClientName(string $ClientName): static
    {
        $this->ClientName = $ClientName;

        return $this;
    }

    public function getClientEmail(): ?string
    {
        return $this->ClientEmail;
    }

    public function setClientEmail(string $ClientEmail): static
    {
        $this->ClientEmail = $ClientEmail;

        return $this;
    }

    public function getClientPhone(): ?string
    {
        return $this->ClientPhone;
    }

    public function setClientPhone(string $ClientPhone): static
    {
        $this->ClientPhone = $ClientPhone;

        return $this;
    }



    public function getClientAddress(): ?string
    {
        return $this->ClientAddress;
    }

    public function setClientAddress(string $ClientAddress): static
    {
        $this->ClientAddress = $ClientAddress;

        return $this;
    }

    public function getClientCountry(): ?string
    {
        return $this->ClientCountry;
    }

    public function setClientCountry(string $ClientCountry): static
    {
        $this->ClientCountry = $ClientCountry;

        return $this;
    }



}
