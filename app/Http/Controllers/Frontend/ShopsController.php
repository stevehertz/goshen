<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;

class ShopsController extends Controller
{

    private $categoryRepository, $productRepository;

    public function __construct(CategoryRepository $categoryRepository, ProductRepository $productRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    public function shop()
    {
        $categories = $this->categoryRepository->getAllActiveCategories();
        $products = $this->productRepository->getAllActiveProducts();
        return view('frontend.shop.shop', [
            'categories' => $categories,
            'products' => $products
        ]);
    }

    //
    public function contact()
    {
        $categories = $this->categoryRepository->getAllActiveCategories();
        $products = $this->productRepository->getAllActiveProducts();
        return view('frontend.shop.contact', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
