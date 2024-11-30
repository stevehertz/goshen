<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    private $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->middleware('auth');
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products  = $this->productRepository->getAll10ActiveProducts();
        return view('backend.dashboard', [
            'products' => $products
        ]);
    }
}
