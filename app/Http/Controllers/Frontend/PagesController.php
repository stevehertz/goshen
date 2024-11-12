<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;

class PagesController extends Controller
{

    private $categoryRepository, $productRepository;

    public function __construct(CategoryRepository $categoryRepository, ProductRepository $productRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    //
    public function index()
    {
        return view('frontend.index');
    }

    public function safari()
    {
        return view('frontend.safari.index');
    }

    public function shop()
    {
        $categories = $this->categoryRepository->getAllActiveCategories();
        return view('frontend.shop.index',[
            'categories' => $categories
        ]);
    }

    public function coming()
    {
        return view('frontend.coming.index');
    }
}
