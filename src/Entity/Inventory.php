<?php

namespace App\Entity;

use App\Repository\InventoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InventoryRepository::class)]
class Inventory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $ItemId = null;

    #[ORM\Column(length: 255)]
    private ?string $ItemName = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateAdded = null;

    #[ORM\Column]
    private ?int $Quantity = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getItemId(): ?int
    {
        return $this->ItemId;
    }

    public function setItemId(int $ItemId): static
    {
        $this->ItemId = $ItemId;

        return $this;
    }

    public function getItemName(): ?string
    {
        return $this->ItemName;
    }

    public function setItemName(string $ItemName): static
    {
        $this->ItemName = $ItemName;

        return $this;
    }

    public function getDateAdded(): ?\DateTime
    {
        return $this->dateAdded;
    }

    public function setDateAdded(\DateTime $dateAdded): static
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }

    public function setQuantity(int $Quantity): static
    {
        $this->Quantity = $Quantity;

        return $this;
    }
}
