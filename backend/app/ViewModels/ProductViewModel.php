<?php

namespace App\ViewModels;

use Illuminate\Pagination\LengthAwarePaginator;

class ProductViewModel
{
    private ?array $products = null;

    public function setProducts(array $products)
    {
        $this->products = $products;
    }

    public function getProducts(): ?array
    {
        return $this->products;
    }
}
