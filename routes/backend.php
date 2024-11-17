<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\RolesController;
use App\Http\Controllers\Backend\UsersController;
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

    Route::get('/{id}/view', [ProductController::class, 'view'])->name('view');

    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('edit');

    Route::put('/{product}/update', [ProductController::class, 'update'])->name('update');

    Route::post('/{product}/update/stock', [ProductController::class, 'updateStock'])->name('update.stock');

    Route::put('/{product}/update/extra/images', [ProductController::class, 'updatextraImages'])->name('update.extra.images');

    Route::delete('/{product}/delete', [ProductController::class, 'destroy'])->name('delete');
});

Route::prefix('users')->name('users.')->group(function(){

    Route::get('/', [UsersController::class, 'index'])->name('index');

    Route::get('/create', [UsersController::class, 'create'])->name('create');

    Route::post('/store', [UsersController::class, 'store'])->name('store');

    Route::put('/deactivate', [UsersController::class, 'deactivate'])->name('deactivate');

    Route::delete('/{user}/delete', [UsersController::class, 'destroy'])->name('delete');

});

Route::prefix('roles')->name('roles.')->group(function(){

    Route::get('/', [RolesController::class, 'index'])->name('index');

    Route::get('/create', [RolesController::class, 'create'])->name('create');

    Route::post('/store', [RolesController::class, 'store'])->name('store');

});
