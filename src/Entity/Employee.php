<?php

namespace App\Entity;

use App\Repository\EmployeeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeeRepository::class)]
class Employee
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Employee = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $DOB = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateStarted = null;

    #[ORM\Column(length: 255)]
    private ?string $Email = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Address = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmployee(): ?int
    {
        return $this->Employee;
    }

    public function setEmployee(int $Employee): static
    {
        $this->Employee = $Employee;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDOB(): ?\DateTime
    {
        return $this->DOB;
    }

    public function setDOB(\DateTime $DOB): static
    {
        $this->DOB = $DOB;

        return $this;
    }

    public function getDateStarted(): ?\DateTime
    {
        return $this->dateStarted;
    }

    public function setDateStarted(\DateTime $dateStarted): static
    {
        $this->dateStarted = $dateStarted;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): static
    {
        $this->Email = $Email;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->Address;
    }

    public function setAddress(string $Address): static
    {
        $this->Address = $Address;

        return $this;
    }
}
