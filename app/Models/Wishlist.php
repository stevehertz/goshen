<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id'];

     // Relationships
     public function user()
     {
         return $this->belongsTo(User::class);
     }

     public function product()
     {
         return $this->belongsTo(Product::class);
     }

     public static function countWishlist($user_id)  
     {
        return self::where('user_id', $user_id)->count();
     }
}
