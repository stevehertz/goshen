<?php

use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\SafariController;
use App\Http\Controllers\Frontend\ShopsController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [PagesController::class, 'index'])->name('home');

Route::get('/safari', [PagesController::class, 'safari'])->name('safari');

Route::get('/our-story', [SafariController::class, 'our_story'])->name('our.story');

Route::get('/fair/scoop',  [SafariController::class, 'fair_scoop'])->name('fair.scoop');

Route::get('/contact',  [SafariController::class, 'contact'])->name('contact');

Route::get('/shop', [PagesController::class, 'shop'])->name('shop');

Route::get('/shop/contact', [ShopsController::class, 'contact'])->name('shop.contact');