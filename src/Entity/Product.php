<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;



    #[ORM\Column(length: 255)]
    private ?string $ProductName = null;

    #[ORM\Column]
    private ?bool $ProdAvailable = null;

    /**
     * @var Collection<int, Process>
     */
    #[ORM\ManyToMany(targetEntity: Process::class, mappedBy: 'ProductId')]
    private Collection $process;

    public function __construct()
    {
        $this->process = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $Id): static
    {
        $this->Id = $Id;

        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->ProductName;
    }

    public function setProductName(string $ProductName): static
    {
        $this->ProductName = $ProductName;

        return $this;
    }

    public function isProdAvailable(): ?bool
    {
        return $this->ProdAvailable;
    }

    public function setProdAvailable(bool $ProdAvailable): static
    {
        $this->ProdAvailable = $ProdAvailable;

        return $this;
    }

    /**
     * @return Collection<int, Process>
     */
    public function getProcess(): Collection
    {
        return $this->process;
    }

    public function addProcess(Process $process): static
    {
        if (!$this->process->contains($process)) {
            $this->process->add($process);
            $process->addProductId($this);
        }

        return $this;
    }

    public function removeProcess(Process $process): static
    {
        if ($this->process->removeElement($process)) {
            $process->removeProductId($this);
        }

        return $this;
    }
}
