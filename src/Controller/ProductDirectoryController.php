<?php

namespace App\Controller;

use App\Entity\ProductDirectory;
use App\Mapper\ProductDirectoryMapper;
use App\Repository\ProductDirectoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

class ProductDirectoryController extends AbstractController
{
    public function index(string $productDirectoryId, ProductDirectoryRepository $directoryRepository): JsonResponse
    {
        try {
            $productDirectory = $directoryRepository->findOneBy(criteria:  ['ProductDirectoryId' => $productDirectoryId]);
            if (!$productDirectory) {
                return $this->json(['error' => 'Product not found'], 404);
            }

            $productDirectoryDto = ProductDirectoryMapper::toDto($productDirectory);

            return $this->json($productDirectoryDto);

        }catch (\Throwable $throwable) {
            return $this->json(['error' => $throwable->getMessage()], 500 );
        }


            //ManagerRegistry $doctrine
        //$connection = $doctrine->getConnection('default');
        //$result = $connection->fetchAllAssociative('SELECT * FROM ProductsDirectory');
        //$result = $doctrine->getRepository(ProductDirectory::class)->findAll();
        //return $this->json($result);
    }
}