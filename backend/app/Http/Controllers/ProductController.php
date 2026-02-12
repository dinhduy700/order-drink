<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\ProductService;
use App\DTO\ProductListDTO;
use App\ViewModels\ProductViewModel;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index(Request $request)
    {
        /* PASS PARAM TO SERVICE */
        $productListDTO = new ProductListDTO();
        $productListDTO->setPageSize($request->input('page_size', 10));
        $productListDTO->setPageIndex($request->input('page', 1));

        $products = $this->productService->getProducts($productListDTO);

        /* RENDER VIEW */
        $viewModel = new ProductViewModel();

        $viewModel->setProducts($products);

        return view('product.index', compact('viewModel'));
    }
}
