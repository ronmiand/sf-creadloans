<?php
namespace App\Mapper;
use App\Dto\ProductDirectoryDetailDto;
use App\Dto\ProductDirectoryDto;
use \App\Entity\ProductDirectory;
use App\Entity\ProductDirectoryDetail;

class ProductDirectoryMapper
{
    public static function toDetailDto(ProductDirectoryDetail $productDirectoryDetail): ProductDirectoryDetailDto
    {
        return new ProductDirectoryDetailDto(
            $productDirectoryDetail->getProductDirectoryDetailId(),
            $productDirectoryDetail->getName(),
            $productDirectoryDetail->getType(),
            $productDirectoryDetail->getDefinition()
        );
    }

    public static function toDto(ProductDirectory $productDirectory): ProductDirectoryDto
    {

        $detailDtos = array_map(
            fn(ProductDirectoryDetail $detail) => self::toDetailDto($detail),
            $productDirectory->getDetails()->toArray()
        );

        return new ProductDirectoryDto(
            $productDirectory->getProductDirectoryId(),
            $productDirectory->getName(),
            $productDirectory->getType(),
            $productDirectory->getDefinition(),
            $detailDtos
        );
    }
    public static function toDtoList(array $products): array
    {
        return array_map(fn(ProductDirectory $product) => self::toDTO($product), $products);
    }

}