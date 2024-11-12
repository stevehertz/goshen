<?php

use App\Http\Controllers\Frontend\ShopsController;
use Illuminate\Support\Facades\Route;

Route::prefix('shop')->name('shop.')->group(function(){

    Route::get('/store', [ShopsController::class, 'shop'])->name('store');

    Route::get('/contact', [ShopsController::class, 'contact'])->name('contact');

});
