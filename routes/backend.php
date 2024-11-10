<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('category')->name('category.')->group(function(){

    Route::get('/', [CategoryController::class, 'index'])->name('index');

    Route::get('/create', [CategoryController::class, 'create'])->name('create');

    Route::post('/store', [CategoryController::class, 'store'])->name('store');

    Route::delete('/{category}/delete', [CategoryController::class, 'destroy'])->name('delete');

});
