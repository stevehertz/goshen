<?php

use App\Http\Controllers\Frontend\ShopsController;
use Illuminate\Support\Facades\Route;

Route::prefix('shop')->name('shop.')->group(function(){

    Route::get('/shop', [ShopsController::class, 'shop'])->name('shop');

    Route::get('/contact', [ShopsController::class, 'contact'])->name('contact');

});
