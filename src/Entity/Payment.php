<?php

namespace App\Entity;

use App\Repository\PaymentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaymentRepository::class)]
class Payment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $PaymentId = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $PaymentDate = null;

    #[ORM\OneToOne(inversedBy: 'payment', cascade: ['persist', 'remove'])]
    private ?Order $OrderId = null;

    #[ORM\Column]
    private array $PaymentType = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPaymentId(): ?int
    {
        return $this->PaymentId;
    }

    public function setPaymentId(int $PaymentId): static
    {
        $this->PaymentId = $PaymentId;

        return $this;
    }

    public function getPaymentDate(): ?\DateTime
    {
        return $this->PaymentDate;
    }

    public function setPaymentDate(\DateTime $PaymentDate): static
    {
        $this->PaymentDate = $PaymentDate;

        return $this;
    }

    public function getOrderId(): ?Order
    {
        return $this->OrderId;
    }

    public function setOrderId(?Order $OrderId): static
    {
        $this->OrderId = $OrderId;

        return $this;
    }

    public function getPaymentType(): array
    {
        return $this->PaymentType;
    }

    public function setPaymentType(array $PaymentType): static
    {
        $this->PaymentType = $PaymentType;

        return $this;
    }
}
