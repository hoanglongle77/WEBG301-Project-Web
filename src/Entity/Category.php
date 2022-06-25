<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $Category_Id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Category_Name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Category_Image;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Category_Description;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCategoryName(): ?string
    {
        return $this->Category_Name;
    }

    public function setCategoryName(?string $Category_Name): self
    {
        $this->Category_Name = $Category_Name;

        return $this;
    }

    public function getCategoryImage(): ?string
    {
        return $this->Category_Image;
    }

    public function setCategoryImage(?string $Category_Image): self
    {
        $this->Category_Image = $Category_Image;

        return $this;
    }

    public function getCategoryDescription(): ?string
    {
        return $this->Category_Description;
    }

    public function setCategoryDescription(?string $Category_Description): self
    {
        $this->Category_Description = $Category_Description;

        return $this;
    }
}
