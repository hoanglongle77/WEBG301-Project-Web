<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $Product_Id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Product_Name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Image1;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Image2;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Image3;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $Price;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $Stock;

    #[ORM\Column(type: 'integer')]
    private $Category_Id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductId(): ?int
    {
        return $this->Product_Id;
    }

    public function setProductId(int $Product_Id): self
    {
        $this->Product_Id = $Product_Id;

        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->Product_Name;
    }

    public function setProductName(?string $Product_Name): self
    {
        $this->Product_Name = $Product_Name;

        return $this;
    }

    public function getImage1(): ?string
    {
        return $this->Image1;
    }

    public function setImage1(?string $Image1): self
    {
        $this->Image1 = $Image1;

        return $this;
    }

    public function getImage2(): ?string
    {
        return $this->Image2;
    }

    public function setImage2(?string $Image2): self
    {
        $this->Image2 = $Image2;

        return $this;
    }

    public function getImage3(): ?string
    {
        return $this->Image3;
    }

    public function setImage3(?string $Image3): self
    {
        $this->Image3 = $Image3;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->Price;
    }

    public function setPrice(?int $Price): self
    {
        $this->Price = $Price;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->Stock;
    }

    public function setStock(?int $Stock): self
    {
        $this->Stock = $Stock;

        return $this;
    }

    public function getCategoryId(): ?int
    {
        return $this->Category_Id;
    }

    public function setCategoryId(int $Category_Id): self
    {
        $this->Category_Id = $Category_Id;

        return $this;
    }
}
