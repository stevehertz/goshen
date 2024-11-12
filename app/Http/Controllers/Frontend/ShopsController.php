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
        return view('frontend.shop.shop', [
            'categories' => $categories
        ]);
    }

    //
    public function contact()
    {
        return view('frontend.shop.contact');
    }
}
