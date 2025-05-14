<?php

namespace App\Entity;

use App\Repository\BuildProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BuildProductRepository::class)]
class BuildProduct
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $buildId = null;

    public function __construct()
    {
        $this->ProductId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBuildId(): ?int
    {
        return $this->buildId;
    }

    public function setBuildId(int $buildId): static
    {
        $this->buildId = $buildId;

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
}
