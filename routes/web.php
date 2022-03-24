<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\admin\ProductsController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('categories')->group(function () {
    // danh sach chuyen muc
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');
    // lấy chi tiết 1 danh mục áp dụng show form sua danh mục
    Route::get('/edit/{id}', [CategoriesController::class, 'getCategory'])->name('categories.edit');
    // xu li update danh muc
    Route::post('/edit/{id}', [CategoriesController::class, 'updateCategory']);
    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');
    // Route::get('/add', [CategoriesController::class, 'updateCategory']);
    // Route::get('/add', [CategoriesController::class, 'handleCategory']);
    Route::delete('/delete/{id}', [CategoriesController::class, 'deleteCategory'])->name('categories.delete');
});



Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('products', ProductsController::class);
});