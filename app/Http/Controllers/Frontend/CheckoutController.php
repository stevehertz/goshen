<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\OrderStatus;
use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    private $categoryRepository, $productRepository;
    public function __construct(CategoryRepository $categoryRepository, ProductRepository $productRepository)
    {
        $this->middleware('auth');
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    public function index(Order $order)
    {
        $categories = $this->categoryRepository->getAllActiveCategories();
        $products = $this->productRepository->getAllActiveProducts();
        $countries = Helper::getCountries();
        $orderItems = $order->items()->latest()->get();
        return view('frontend.shop.checkout', [
            'order' => $order,
            'categories' => $categories,
            'products' => $products,
            'countries' => $countries,
            'orderItems' => $orderItems
        ]);
    }

    public function checkout(Request $request)
    {
        // Retrieve cart items
        $cartItems = Cart::where('user_id', auth()->user()->id)->get();

        if ($cartItems->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Your cart is empty!',
            ]);
        }

        // Create an order
        $order = Order::create([
            'user_id' => auth()->id(),
            'total_amount' => $cartItems->sum('total_price'),
            'status' => OrderStatus::PENDING
        ]);

        // Transfer cart items to order items
        foreach ($cartItems as $cartItem) {
            $order->items()->create([
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->price,
                'total_price' => $cartItem->total_price,
            ]);
        }

        // Clear the cart
        Cart::where('user_id', auth()->id())->delete();

        // Return response
        return response()->json([
            'status' => true,
            'order' => $order->id
        ]);

    }
}
