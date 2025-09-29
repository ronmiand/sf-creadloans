<?php

namespace App\Entity;

use App\Repository\ProductDirectoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductDirectoryRepository::class)]
class ProductDirectory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $ProductDirectoryId = null;

    #[ORM\Column(length: 36)]
    private ?string $ProductDirectoryUUID = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    private ?string $Type = null;

    #[ORM\Column(length: 255)]
    private ?string $Definition = null;

    #[ORM\Column]
    private ?bool $State = null;

    #[ORM\Column]
    private ?\DateTime $CreatedAt = null;

    #[ORM\Column]
    private ?\DateTime $UpdatedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductDirectoryId(): ?int
    {
        return $this->ProductDirectoryId;
    }

    public function setProductDirectoryId(int $ProductDirectoryId): static
    {
        $this->ProductDirectoryId = $ProductDirectoryId;

        return $this;
    }

    public function getProductDirectoryUUID(): ?string
    {
        return $this->ProductDirectoryUUID;
    }

    public function setProductDirectoryUUID(string $ProductDirectoryUUID): static
    {
        $this->ProductDirectoryUUID = $ProductDirectoryUUID;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): static
    {
        $this->Type = $Type;

        return $this;
    }

    public function getDefinition(): ?string
    {
        return $this->Definition;
    }

    public function setDefinition(string $Definition): static
    {
        $this->Definition = $Definition;

        return $this;
    }

    public function isState(): ?bool
    {
        return $this->State;
    }

    public function setState(bool $State): static
    {
        $this->State = $State;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->CreatedAt;
    }

    public function setCreatedAt(\DateTime $CreatedAt): static
    {
        $this->CreatedAt = $CreatedAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->UpdatedAt;
    }

    public function setUpdatedAt(\DateTime $UpdatedAt): static
    {
        $this->UpdatedAt = $UpdatedAt;

        return $this;
    }
}
