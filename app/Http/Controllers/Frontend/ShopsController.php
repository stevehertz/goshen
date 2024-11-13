<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
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

    public function viewProduct($id)
    {
        $categories = $this->categoryRepository->getAllActiveCategories();
        $product = $this->productRepository->show($id);
        $allProducts = Product::where('id', '!=', $product->id)->latest()->get();
        return view('frontend.shop.viewProduct', [
            'data' => $product,
            'categories' => $categories,
            'relatedProducts' => $allProducts
        ]);
    }

    public function bulkPurchase()
    {
        $categories = $this->categoryRepository->getAllActiveCategories();
        $products = $this->productRepository->getAllActiveProducts();
        return view('frontend.shop.bulk-purchase', [
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
