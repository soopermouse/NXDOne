<?php

namespace App\Entity;

use App\Repository\EmployeeTypeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeeTypeRepository::class)]
class EmployeeType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $EmployeeTypeId = null;

    #[ORM\Column(length: 255)]
    private ?string $EmployeeTypeGroup = null;

    #[ORM\Column(length: 255)]
    private ?string $EmployeeType = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmployeeTypeId(): ?int
    {
        return $this->EmployeeTypeId;
    }

    public function setEmployeeTypeId(int $EmployeeTypeId): static
    {
        $this->EmployeeTypeId = $EmployeeTypeId;

        return $this;
    }

    public function getEmployeeTypeGroup(): ?string
    {
        return $this->EmployeeTypeGroup;
    }

    public function setEmployeeTypeGroup(string $EmployeeTypeGroup): static
    {
        $this->EmployeeTypeGroup = $EmployeeTypeGroup;

        return $this;
    }

    public function getEmployeeType(): ?string
    {
        return $this->EmployeeType;
    }

    public function setEmployeeType(string $EmployeeType): static
    {
        $this->EmployeeType = $EmployeeType;

        return $this;
    }
}
