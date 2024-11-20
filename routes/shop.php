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

    Route::middleware('auth')->group(function(){

        Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');

        Route::post('/wishlist/store', [WishlistController::class, 'store'])->name('wishlist.store');

        Route::delete('/wishlist/{id}/delete', [WishlistController::class, 'destroy'])->name('wishlist.delete');
    });

    Route::prefix('cart')->middleware('auth')->name('cart.')->group(function(){

        Route::get('/', [CartController::class, 'index'])->name('index');

        Route::post('/store', [CartController::class, 'store'])->name('store');

        Route::post('/{cart}/update', [CartController::class, 'update'])->name('update');

        Route::delete('/{cart}/delete', [CartController::class, 'destroy'])->name('delete');

    });

});
