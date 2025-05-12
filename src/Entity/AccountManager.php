<?php

namespace App\Entity;

use App\Repository\AccountManagerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AccountManagerRepository::class)]
class AccountManager
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $AgentName = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $AgentDOB = null;

    #[ORM\Column(length: 255)]
    private ?string $AgentEmail = null;

    #[ORM\Column]
    private ?bool $Active = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateJoined = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateLeft = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getAgentName(): ?string
    {
        return $this->AgentName;
    }

    public function setAgentName(string $AgentName): static
    {
        $this->AgentName = $AgentName;

        return $this;
    }

    public function getAgentDOB(): ?\DateTime
    {
        return $this->AgentDOB;
    }

    public function setAgentDOB(\DateTime $AgentDOB): static
    {
        $this->AgentDOB = $AgentDOB;

        return $this;
    }

    public function getAgentEmail(): ?string
    {
        return $this->AgentEmail;
    }

    public function setAgentEmail(string $AgentEmail): static
    {
        $this->AgentEmail = $AgentEmail;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->Active;
    }

    public function setActive(bool $Active): static
    {
        $this->Active = $Active;

        return $this;
    }

    public function getDateJoined(): ?\DateTime
    {
        return $this->dateJoined;
    }

    public function setDateJoined(\DateTime $dateJoined): static
    {
        $this->dateJoined = $dateJoined;

        return $this;
    }

    public function getDateLeft(): ?\DateTime
    {
        return $this->dateLeft;
    }

    public function setDateLeft(\DateTime $dateLeft): static
    {
        $this->dateLeft = $dateLeft;

        return $this;
    }
}
