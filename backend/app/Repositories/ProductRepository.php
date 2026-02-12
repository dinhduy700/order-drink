<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function getProducts(int $pageSize)
    {
        return Product::query()
            ->paginate($pageSize)
            ->withQueryString(); // keep other query parameters in the URL
    }
}
