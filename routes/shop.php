<?php

use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\ShopsController;
use App\Http\Controllers\Frontend\WishlistController;
use Illuminate\Support\Facades\Route;

Route::prefix('shop')->name('shop.')->group(function(){

    Route::get('/{id}/view/product', [ShopsController::class, 'viewProduct'])->name('view.product');

    Route::get('/store', [ShopsController::class, 'shop'])->name('store');

    Route::get('/bulk/purchase', [ShopsController::class, 'bulkPurchase'])->name('bulk.purchase');

    Route::get('/contact', [ShopsController::class, 'contact'])->name('contact');

    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');

    Route::get('/wishlist/store', [WishlistController::class, 'store'])->name('wishlist.store');

    Route::prefix('cart')->name('cart.')->group(function(){

        Route::get('/', [CartController::class, 'index'])->name('index');
        
        Route::post('/store', [CartController::class, 'store'])->name('store');
    });

});
