<?php

use App\Http\Controllers\Frontend\ShopsController;
use Illuminate\Support\Facades\Route;

Route::prefix('shop')->name('shop.')->group(function(){

    Route::get('/{id}/view/product', [ShopsController::class, 'viewProduct'])->name('view.product');

    Route::get('/store', [ShopsController::class, 'shop'])->name('store');

    Route::get('/bulk/purchase', [ShopsController::class, 'bulkPurchase'])->name('bulk.purchase');

    Route::get('/contact', [ShopsController::class, 'contact'])->name('contact');

});
