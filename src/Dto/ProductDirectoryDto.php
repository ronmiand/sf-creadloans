<?php
namespace App\Dto;

use Symfony\Component\Validator\Constraints as Assert;
class ProductDirectoryDto
{
    #[Assert\NotBlank]
    public string $productDirectoryId;

    #[Assert\NotBlank] //    #[Assert\Positive]
    public string $name;

    #[Assert\NotBlank]
    public string $type;

    #[Assert\NotBlank]
    public string $definition;
    public array $details;


    public function __construct(string $productDirectoryId, string $name, string $type, string $definition, array $details)
    {
        $this->productDirectoryId = $productDirectoryId;
        $this->name = $name;
        $this->type = $type;
        $this->definition = $definition;
        $this->details = $details;
    }

}