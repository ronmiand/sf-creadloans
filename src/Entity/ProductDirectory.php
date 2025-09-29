<?php

namespace App\Entity;

use App\Repository\ProductDirectoryRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductDirectoryRepository::class)]
#[ORM\Table(name: 'ProductsDirectory')]
class ProductDirectory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column( type: 'integer', name: 'Id', nullable: false,)]
    private ?int $id = null;

    #[ORM\Column(length: 36)]
    private ?string $ProductDirectoryId = null;

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
    #[ORM\OneToMany(mappedBy: 'productDirectory', targetEntity: ProductDirectoryDetail::class, cascade: ['persist'], orphanRemoval: true)]
    private Collection $details;

    public function getDetails(): Collection
    {
        return $this->details;
    }

    public function setDetails(Collection $details): void
    {
        $this->details = $details;
    }

    public function __construct()
    {
        $this->details = new ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getProductDirectoryId(): ?string
    {
        return $this->ProductDirectoryId;
    }

    public function setProductDirectoryId(string $ProductDirectoryId): static
    {
        $this->ProductDirectoryId = $ProductDirectoryId;

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
