<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\UploadedFile;

class ProductRepository
{

    public function getAllProducts()
    {
        return Product::latest()->get();
    }

    public function getAllActiveProducts()  
    {
        return Product::with(['categories'])->latest()->get();    
    }

    public function storeProduct(array $attributes, ?UploadedFile $image = null)
    {
        $product = Product::create([
            'title' => data_get($attributes, 'title'),
            'sku' => data_get($attributes, 'sku'),
            'barcode' => data_get($attributes, 'barcode'),
            'description' => data_get($attributes, 'description'),
            'image' => 'img/products/noimage.png',
            'quantity' => data_get($attributes, 'quantity'),
            'in_stock' => data_get($attributes, 'in_stock'),
            'status' => data_get($attributes, 'status'),
            'price' => data_get($attributes, 'price'),
            'created_by' => data_get($attributes, 'user_id'),
            'updated_by' => data_get($attributes, 'user_id'),
        ]);

        $category = Category::findOrFail(data_get($attributes, 'category_id'));
        $category->products()->attach($product->id);

        // upload featured image
        if ($image) {
            $path = $image->store('img/products', 'public');
            $product->update(['image' => $path]);
        }

        return $product;
    }

    public function show($id)
    {
        return Product::with(['categories'])->findOrFail($id);
    }

    public function updateProduct(array $attributes, Product $product, ?UploadedFile $image = null)
    {
        $product->update([
            'title' => data_get($attributes, 'title'),
            'sku' => data_get($attributes, 'sku'),
            'barcode' => data_get($attributes, 'barcode'),
            'description' => data_get($attributes, 'description'),
            'quantity' => data_get($attributes, 'quantity'),
            'in_stock' => data_get($attributes, 'in_stock'),
            'status' => data_get($attributes, 'status'),
            'price' => data_get($attributes, 'price'),
            'updated_by' => data_get($attributes, 'user_id'),
        ]);

        $category = Category::findOrFail(data_get($attributes, 'category_id'));
        $category->products()->attach($product->id);

         // upload featured image
         if ($image) {
            $path = $image->store('img/products', 'public');
            $product->update(['image' => $path]);
        }

        return $product;
    }

    public function updateStock(array $attributes, Product $product)  
    {
        return $product->update([
            'in_stock' => data_get($attributes, 'in_stock') 
        ]);
    }


    public function destroyProduct(Product $product)
    {
        if($product->image != 'img/categories/noimage.png')
        {
            $imagePath = public_path($product->image);
            // Check if the file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        return $product->delete();
    }

}
