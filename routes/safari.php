<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SafariController;

Route::prefix('safari')->name('safari.')->group(function(){

    Route::get('/about', [SafariController::class, 'about'])->name('about.us');

    Route::get('/our-story', [SafariController::class, 'our_story'])->name('our.story');

    Route::get('/our-products',  [SafariController::class, 'our_products'])->name('our.products');

    Route::get('/sustainability',  [SafariController::class, 'sustainability'])->name('sustainability');

    Route::get('/news',  [SafariController::class, 'news'])->name('news');

    Route::get('/farmers/training', [SafariController::class, 'farmers_training'])->name('agroecology.for.sustainability');

    Route::get('/diversify', [SafariController::class, 'diversification'])->name('diversification.of.tropical.fruit.product');

    Route::get('/chilli-mango', [SafariController::class, 'chilli_mango'])->name('tale.of.innovation');

    Route::get('/contact',  [SafariController::class, 'contact'])->name('contact');

});
