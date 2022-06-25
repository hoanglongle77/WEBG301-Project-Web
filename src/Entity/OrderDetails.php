<?php

namespace App\Entity;

use App\Repository\OrderDetailsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderDetailsRepository::class)]
class OrderDetails
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $Order_Details_Id;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $Product_Id;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $Product_Quantity;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $Product_Price;

    #[ORM\Column(type: 'string', length: 255)]
    private $Order_Id;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $Subtotal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderDetailsId(): ?int
    {
        return $this->Order_Details_Id;
    }

    public function setOrderDetailsId(int $Order_Details_Id): self
    {
        $this->Order_Details_Id = $Order_Details_Id;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->Product_Id;
    }

    public function setProductId(?int $Product_Id): self
    {
        $this->Product_Id = $Product_Id;

        return $this;
    }

    public function getProductQuantity(): ?int
    {
        return $this->Product_Quantity;
    }

    public function setProductQuantity(?int $Product_Quantity): self
    {
        $this->Product_Quantity = $Product_Quantity;

        return $this;
    }

    public function getProductPrice(): ?int
    {
        return $this->Product_Price;
    }

    public function setProductPrice(?int $Product_Price): self
    {
        $this->Product_Price = $Product_Price;

        return $this;
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

    public function getSubtotal(): ?int
    {
        return $this->Subtotal;
    }

    public function setSubtotal(?int $Subtotal): self
    {
        $this->Subtotal = $Subtotal;

        return $this;
    }
}
