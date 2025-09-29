<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\Table(name: 'ProductsDirectoryDetail')]
class ProductDirectoryDetail
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer', name: 'Id')]
    private ?int $id = null;
    #[ORM\Column(length: 36, type: 'string')]
    private ?string $ProductDirectoryDetailId = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    private ?string $Type = null;

    #[ORM\Column(length: 255)]
    private ?string $Definition = null;

    #[ORM\ManyToOne(targetEntity: ProductDirectory::class, inversedBy: 'details')]
    #[ORM\JoinColumn(name: 'ProductDirectoryId', referencedColumnName: 'Id', nullable: false)]
    private ?ProductDirectory $productDirectory;


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

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getProductDirectory(): ?ProductDirectory
    {
        return $this->productDirectory;
    }

    public function setProductDirectory(ProductDirectory $productDirectory): void
    {
        $this->productDirectory = $productDirectory;
    }

    public function getProductDirectoryDetailId(): ?string
    {
        return $this->ProductDirectoryDetailId;
    }

    public function setProductDirectoryDetailId(string $productDirectoryDetailId): static
    {
        $this->ProductDirectoryDetailId = $productDirectoryDetailId;

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