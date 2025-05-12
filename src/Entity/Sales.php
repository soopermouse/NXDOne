<?php

namespace App\Entity;

use App\Repository\SalesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SalesRepository::class)]
class Sales
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $OrderId = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $Date = null;

  

    #[ORM\Column]
    private ?float $Total = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?client $clientId = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?AccountManager $AcctManagerId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderId(): ?int
    {
        return $this->OrderId;
    }

    public function setOrderId(int $OrderId): static
    {
        $this->OrderId = $OrderId;

        return $this;
    }

    public function getDate(): ?\DateTime
    {
        return $this->Date;
    }

    public function setDate(\DateTime $Date): static
    {
        $this->Date = $Date;

        return $this;
    }





    public function getTotal(): ?float
    {
        return $this->Total;
    }

    public function setTotal(float $Total): static
    {
        $this->Total = $Total;

        return $this;
    }

    public function getClientId(): ?client
    {
        return $this->clientId;
    }

    public function setClientId(?client $Id): static
    {
        $this->clientId = $Id;

        return $this;
    }

    public function getAcctManagerId(): ?AccountManager
    {
        return $this->AcctManagerId;
    }

    public function setAcctManagerId(?AccountManager $Id): static
    {
        $this->AcctManagerId = $Id;

        return $this;
    }
}
