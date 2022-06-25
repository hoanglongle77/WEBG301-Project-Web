<?php

namespace App\Entity;

use App\Repository\OrderTblRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderTblRepository::class)]
class OrderTbl
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Order_Id;

    #[ORM\Column(type: 'integer')]
    private $Order_No;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $Order_Date;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $Order_Total;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $Customer_Id;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $Shipping_Date;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $Is_Delivered;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderId(): ?string
    {
        return $this->Order_Id;
    }

    public function setOrderId(string $Order_Id): self
    {
        $this->Order_Id = $Order_Id;

        return $this;
    }

    public function getOrderNo(): ?int
    {
        return $this->Order_No;
    }

    public function setOrderNo(int $Order_No): self
    {
        $this->Order_No = $Order_No;

        return $this;
    }

    public function getOrderDate(): ?\DateTimeInterface
    {
        return $this->Order_Date;
    }

    public function setOrderDate(?\DateTimeInterface $Order_Date): self
    {
        $this->Order_Date = $Order_Date;

        return $this;
    }

    public function getOrderTotal(): ?int
    {
        return $this->Order_Total;
    }

    public function setOrderTotal(?int $Order_Total): self
    {
        $this->Order_Total = $Order_Total;

        return $this;
    }

    public function getCustomerId(): ?int
    {
        return $this->Customer_Id;
    }

    public function setCustomerId(?int $Customer_Id): self
    {
        $this->Customer_Id = $Customer_Id;

        return $this;
    }

    public function getShippingDate(): ?\DateTimeInterface
    {
        return $this->Shipping_Date;
    }

    public function setShippingDate(?\DateTimeInterface $Shipping_Date): self
    {
        $this->Shipping_Date = $Shipping_Date;

        return $this;
    }

    public function isIsDelivered(): ?bool
    {
        return $this->Is_Delivered;
    }

    public function setIsDelivered(?bool $Is_Delivered): self
    {
        $this->Is_Delivered = $Is_Delivered;

        return $this;
    }
}
