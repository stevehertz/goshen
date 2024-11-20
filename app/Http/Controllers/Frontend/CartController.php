<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCartRequest;
use App\Repositories\ProductRepository;
use App\Http\Requests\UpdateCartRequest;
use App\Repositories\CategoryRepository;

class CartController extends Controller
{

    private $categoryRepository, $productRepository;
    public function __construct(CategoryRepository $categoryRepository, ProductRepository $productRepository)
    {
        $this->middleware('auth');
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = $this->categoryRepository->getAllActiveCategories();
        $products = $this->productRepository->getAllActiveProducts();
        $grandTotal = $this->getCartTotal();
        $data = Cart::where('user_id', Auth::id())->with('product')->get();
        return view('frontend.shop.cart', [
            'categories' => $categories,
            'products' => $products,
            'data' => $data,
            'grandTotal' => $grandTotal
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
    public function store(StoreCartRequest $request)
    {
        //
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        // Fetch the product
        $product = Product::findOrFail($product_id);

         // Check if the product is already in the user's cart
         $cartItem = Cart::where('user_id', Auth::id())
         ->where('product_id', $product_id)
         ->first();

        if ($cartItem) {
            // If it exists, increment the quantity
            $cartItem->quantity += $quantity;
            $cartItem->total_price = $cartItem->quantity * $product->price;
            $cartItem->save();
        } else {
            // Otherwise, create a new cart entry
            Cart::create([
                'user_id' => Auth::user()->id,
                'product_id' => $product_id,
                'quantity' => $quantity,
                'total_price' => $quantity * $product->price,
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Product added to cart'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    public function getCartTotal()
    {
        $cartTotal = Cart::where('user_id', Auth::id())
            ->sum('total_price');
        return $cartTotal;
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
        $quantity = $request->input('quantity');
        // Validate the quantity
        if ($quantity <= 0) {
            return response()->json([
                'status' => false,
                'message' => 'Minimum quantity to order is 24 pieces'
            ]);
        }

        $cart->quantity = $quantity;
        $cart->total_price = $cart->quantity * $cart->product->price;
        $cart->save();

        return response()->json([
            'status' => true,
            'message' => 'You have successfully updated cart'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
        if($cart->delete())
        {
            return response()->json([
                'status' => true,
                'message' => 'You have successfully deleted products from cart'
            ]);
        }
    }
}
