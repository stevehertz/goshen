<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\PaymentController;
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


Route::post('/contact', [ContactController::class, 'submit'])->name('contact');

Route::prefix('payments')->name('payments.')->group(function(){

    Route::get('/callback', [PaymentController::class, 'callback'])->name('callback');

    Route::post('/{order}/checkout', [PaymentController::class, 'store'])->name('checkout');

    Route::get('/{order}/waiting', [PaymentController::class, 'waiting'])->name('waiting');
});

Route::post('/confirmation', [PaymentController::class, 'mpesa_confirmation'])->name('confirmation');

Route::post('/validation', [PaymentController::class, 'mpesa_validation'])->name('validation');