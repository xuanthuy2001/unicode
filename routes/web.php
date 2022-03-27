<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/san-pham', [HomeController::class, 'products'])->name('product');
Route::get('/them-san-pham', [HomeController::class, 'getAdd']);
Route::post('/them-san-pham', [HomeController::class, 'postAdd']);
Route::put('/them-san-pham', [HomeController::class, 'putAdd']);


Route::get('/demo-response', function () {
      $contentArr = [
            'name' => "laravel 8.x",
            'leson' => "khóa học lập trình Laravel",
            'academy' => "Unicode academy",

      ];

      return $contentArr;
});



Route::get('/lay-thong-tin', [HomeController::class, 'getArr']);
Route::get('/demo_response', function () {
      // $response = new Response('Học lập trình tại unicode', 200);
      // $response = response('Học lập trình tại unicode', 404);

      return new  Response('Học lập trình tại unicode', 404);
});