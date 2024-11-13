<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Requests\UpdateProductStockRequest;

class ProductController extends Controller
{
    private $productRepository, $categoryRepository;
    public function __construct(ProductRepository $productRepository, CategoryRepository $categoryRepository)
    {
        $this->middleware('auth');
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = $this->productRepository->getAllProducts();
        return view('backend.products.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = $this->categoryRepository->getAllActiveCategories();
        return view('backend.products.edit', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
        $data = $request->except("_token");

        if ($request->hasFile('image')) {
            $image = $request->file('image');
        } else {
            $image = null;
        }

        $product = $this->productRepository->storeProduct($data, $image);

        if($product)
        {
            return response()->json([
                'status' => true,
                'message' => 'Successfully saved product'
            ]);
        }
    }

     /**
     * Store a newly created resource in storage.
     */
    public function updatextraImages(Request $request, Product $product)
    {
        $request->validate([
            'extra_images.*' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        $extraImages = [];

        if($request->hasFile('extra_images')) {
            foreach ($request->file('extra_images') as $file) {
                $path = $file->store('img/products', 'public');
                $extraImages[] = $path;
            }
        }

        $product->update([
            'extra_images' => json_encode($extraImages), // Store as JSON
        ]);

        return response()->json([
            'status' => true,
            'message' => 'You have successfully stored images'
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        return response()->json([
            'status' => true,
            'data' => $this->productRepository->show($id)
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function view($id)
    {
        $data = $this->productRepository->show($id);
        return view('backend.products.view', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data = $this->productRepository->show($id);
        $categories = $this->categoryRepository->getAllActiveCategories();
        return view('backend.products.edit', [
            'data' => $data,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
        $data = $request->except("_token");

        if ($request->hasFile('image')) {
            $image = $request->file('image');
        } else {
            $image = null;
        }
        $product = $this->productRepository->updateProduct($data, $product, $image);
        if($product)
        {
            return response()->json([
                'status' => true,
                'message' => 'Successfully updated product'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStock(UpdateProductStockRequest $request, Product $product)
    {
        $data = $request->except("_token");
        $product = $this->productRepository->updateStock($data, $product);
        if($product)
        {
            return response()->json([
                'status' => true,
                'message' => 'Stock successfully updated'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        if($this->productRepository->destroyProduct($product))
        {
            return response()->json([
                'status' => true,
                'message' => 'Successfully deleted product'
            ]);
        }
    }
}
