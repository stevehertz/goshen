<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('category')->name('category.')->group(function(){

    Route::get('/', [CategoryController::class, 'index'])->name('index');

    Route::get('/create', [CategoryController::class, 'create'])->name('create');

    Route::post('/store', [CategoryController::class, 'store'])->name('store');

    Route::get('/{id}/show', [CategoryController::class, 'show'])->name('show');

    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit');

    Route::put('/{category}/update', [CategoryController::class, 'update'])->name('update');

    Route::delete('/{category}/delete', [CategoryController::class, 'destroy'])->name('delete');
});

Route::prefix('products')->name('products.')->group(function(){

    Route::get('/', [ProductController::class, 'index'])->name('index');

    Route::get('/create', [ProductController::class, 'create'])->name('create');

    Route::post('/store', [ProductController::class, 'store'])->name('store');

    Route::get('/{id}/show', [ProductController::class, 'show'])->name('show');

    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('edit');

    Route::put('/{product}/update', [ProductController::class, 'update'])->name('update');

    Route::post('/{product}/update/stock', [ProductController::class, 'updateStock'])->name('update.stock');

    Route::delete('/{product}/delete', [ProductController::class, 'destroy'])->name('delete');
});
