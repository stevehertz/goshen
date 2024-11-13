<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'sku',
        'barcode',
        'description',
        'image',
        'quantity',
        'in_stock',
        'status',
        'price',
        'minimum_purchase',
        'extra_images',
        'rating',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }
}
