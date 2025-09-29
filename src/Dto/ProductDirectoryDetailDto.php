<?php
namespace App\Dto;

use Symfony\Component\Validator\Constraints as Assert;
class ProductDirectoryDetailDto
{
    #[Assert\NotBlank]
    //#[Assert\Length(min: 1, max: 255)]
    public string $productDirectoryDetailId;

    #[Assert\NotBlank] //    #[Assert\Positive]
    public string $name;

    #[Assert\NotBlank]
    public string $type;

    #[Assert\NotBlank]
    public string $definition;

    public function __construct(string $productDirectoryDetailId, string $name, string $type, string $definition)
    {
        $this->productDirectoryDetailId = $productDirectoryDetailId;
        $this->name = $name;
        $this->type = $type;
        $this->definition = $definition;
    }
}