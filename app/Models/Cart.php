<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'quantity'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function countCart($user_id) 
    {
        return self::where('user_id', $user_id)->sum('quantity');
    }

    public static function countTotalPrice($user_id)
    {
        // Get all products in the user's cart
        $cartItems = self::where('user_id', $user_id)->get();

        $totalPrice = 0;

        foreach ($cartItems as $item) {
            $product = $item->product; // Get the associated product

            // Add to the total price: price * quantity
            $totalPrice += $product->price * $item->quantity;
        }

        return $totalPrice;
    }
}
