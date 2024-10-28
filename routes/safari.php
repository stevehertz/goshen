<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SafariController;

Route::prefix('safari')->name('safari.')->group(function(){

    Route::get('/about', [SafariController::class, 'about'])->name('about');

    Route::get('/our-story', [SafariController::class, 'our_story'])->name('our.story');

    Route::get('/our-products',  [SafariController::class, 'our_products'])->name('our.products');

    Route::get('/sustainability',  [SafariController::class, 'sustainability'])->name('sustainability');

    Route::get('/news',  [SafariController::class, 'news'])->name('news');

    Route::get('/contact',  [SafariController::class, 'contact'])->name('contact');

});
