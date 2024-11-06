<?php

use App\Http\Controllers\Frontend\PagesController;
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

Route::get('/shop', [PagesController::class, 'shop'])->name('shop');

Route::get('/coming', [PagesController::class, 'coming'])->name('coming');
