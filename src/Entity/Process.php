<?php

namespace App\Entity;

use App\Repository\ProcessRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProcessRepository::class)]
class Process
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $ProcessId = null;

    /**
     * @var Collection<int, Product>
     */
    #[ORM\ManyToMany(targetEntity: Product::class, inversedBy: 'process')]
    private Collection $ProductId;

    #[ORM\Column]
    private ?bool $Active = null;

    #[ORM\Column]
    private ?int $ProcessSteps = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $Added = null;

    public function __construct()
    {
        $this->ProductId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProcessId(): ?int
    {
        return $this->ProcessId;
    }

    public function setProcessId(int $ProcessId): static
    {
        $this->ProcessId = $ProcessId;

        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProductId(): Collection
    {
        return $this->ProductId;
    }

    public function addProductId(Product $productId): static
    {
        if (!$this->ProductId->contains($productId)) {
            $this->ProductId->add($productId);
        }

        return $this;
    }

    public function removeProductId(Product $productId): static
    {
        $this->ProductId->removeElement($productId);

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

    public function getProcessSteps(): ?int
    {
        return $this->ProcessSteps;
    }

    public function setProcessSteps(int $ProcessSteps): static
    {
        $this->ProcessSteps = $ProcessSteps;

        return $this;
    }

    public function getAdded(): ?\DateTime
    {
        return $this->Added;
    }

    public function setAdded(\DateTime $Added): static
    {
        $this->Added = $Added;

        return $this;
    }
}
