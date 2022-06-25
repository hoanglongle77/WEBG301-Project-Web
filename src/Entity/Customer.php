<?php

namespace App\Entity;

use App\Repository\CustomerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CustomerRepository::class)]
class Customer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $Customer_Id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Customer_Email;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $First_Name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Last_Name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Password;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Address;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $PostCode;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $City;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Phone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomerId(): ?int
    {
        return $this->Customer_Id;
    }

    public function setCustomerId(int $Customer_Id): self
    {
        $this->Customer_Id = $Customer_Id;

        return $this;
    }

    public function getCustomerEmail(): ?string
    {
        return $this->Customer_Email;
    }

    public function setCustomerEmail(?string $Customer_Email): self
    {
        $this->Customer_Email = $Customer_Email;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->First_Name;
    }

    public function setFirstName(?string $First_Name): self
    {
        $this->First_Name = $First_Name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->Last_Name;
    }

    public function setLastName(?string $Last_Name): self
    {
        $this->Last_Name = $Last_Name;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(?string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->Address;
    }

    public function setAddress(?string $Address): self
    {
        $this->Address = $Address;

        return $this;
    }

    public function getPostCode(): ?string
    {
        return $this->PostCode;
    }

    public function setPostCode(?string $PostCode): self
    {
        $this->PostCode = $PostCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->City;
    }

    public function setCity(?string $City): self
    {
        $this->City = $City;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->Phone;
    }

    public function setPhone(?string $Phone): self
    {
        $this->Phone = $Phone;

        return $this;
    }
}
