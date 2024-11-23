<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repositories\OrderRepository;
use App\Repositories\ProductRepository;
use App\Http\Requests\StoreOrderRequest;
use App\Repositories\CategoryRepository;
use App\Http\Requests\UpdateOrderRequest;

class OrderController extends Controller
{

    private $orderRepository, $categoryRepository, $productRepository;
    public function __construct(OrderRepository $orderRepository, CategoryRepository $categoryRepository, ProductRepository $productRepository)
    {
        $this->middleware('auth');
        $this->orderRepository = $orderRepository;
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = $this->orderRepository->getUserOrders(Auth::user());
        $categories = $this->categoryRepository->getAllActiveCategories();
        $products = $this->productRepository->getAllActiveProducts();
        return view('frontend.shop.orders', [
            'data' => $data,
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
