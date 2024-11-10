<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

class CategoryRepository
{
    public function getAllCategories()
    {
        return Category::latest()->get();
    }

    public function storeCategory(array $attributes, ?UploadedFile $image = null)
    {
        $category = Category::create([
            'title' => data_get($attributes, 'title'),
            'slug' => Str::slug(data_get($attributes, 'title')),
            'image' => 'img/categories/noimage.png',
            'description' => data_get($attributes, 'description'),
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

    public function destroyCategory(Category $category)  
    {
        return $category->delete();
    }
}
