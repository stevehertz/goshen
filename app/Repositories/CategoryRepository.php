<?php

namespace App\Repositories;

use App\Enums\Status;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

class CategoryRepository
{
    public function getAllCategories()
    {
        return Category::latest()->get();
    }

    public function getAllActiveCategories($status = Status::ACTIVE)
    {
        return Category::with('products')->where('status', $status)->latest()->get();
    }

    public function storeCategory(array $attributes, ?UploadedFile $image = null)
    {
        $category = Category::create([
            'title' => data_get($attributes, 'title'),
            'slug' => Str::slug(data_get($attributes, 'title')),
            'image' => 'img/categories/noimage.png',
            'description' => data_get($attributes, 'description'),
            'status' => data_get($attributes, 'status'),
            'created_by' => data_get($attributes, 'user_id'),
            'updated_by' => data_get($attributes, 'user_id')
        ]);

        // upload featured image
        if ($image) {
            $path = $image->store('img/categories', 'public');
            $category->update(['image' => $path]);
        }

        return $category;
    }


    public function show($id)
    {
        return Category::findOrFail($id);
    }

    public function update(array $attributes, Category $category, ?UploadedFile $image = null)  
    {
        $category->update([
            'title' => data_get($attributes, 'title'),
            'slug' => Str::slug(data_get($attributes, 'title')),
            'description' => data_get($attributes, 'description'),
            'status' => data_get($attributes, 'status'),
            'updated_by' => data_get($attributes, 'user_id')
        ]);

        // upload featured image
        if ($image) {
            $path = $image->store('img/categories', 'public');
            $category->update(['image' => $path]);
        }

        return $category;
    }

    public function destroyCategory(Category $category)
    {
        if($category->image != 'img/categories/noimage.png')
        {
            $imagePath = public_path($category->image);
            // Check if the file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        return $category->delete();
    }
}
