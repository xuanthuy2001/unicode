<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::get('/unicode', function () {
        return 'day la phuong thuc post';
    });
    Route::get('/show-form', function () {
        return view('form');
    });

    Route::get('/products', function () {
        return 'danh sach san pham';
    });
    Route::get('/add', function () {
        return ' them san pham';
    });

    Route::get('/edit', function () {
        return 'sua san pham';
    });
    Route::get('/delete', function () {
        return 'xoa san pham';
    });
});