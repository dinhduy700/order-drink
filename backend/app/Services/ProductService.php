<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use App\DTO\ProductListDTO;
use App\DTO\ProductResponseDTO;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getProducts(ProductListDTO $dto)
    {
        $products = $this->productRepository->getProducts(
            $dto->getPageSize(),
            $dto->getPageIndex()
        );

        $response = [];
        foreach ($products as $product) {
            $responseDTO = new ProductResponseDTO();

            $responseDTO->setId($product->id);
            $responseDTO->setName($product->name);
            $responseDTO->setPrice($product->price);

            $response[] = $responseDTO;
        }

        return $response;
    }
}
