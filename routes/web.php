<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
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

      return view('clients.demo_test');
})->name('demo_response');
Route::post('demo_response', function (Request $request) {
      if (!empty($request->username)) {

            return back()->withInput()->with('mes', ' thanh cong');
      }

      return redirect(route('demo_response'))->with('mes', 'khong thanh cong');
});
Route::get('download_img', [HomeController::class, 'downImg'])->name('downloadImg');



// người dùng
Route::prefix('users')->name('users.')->group(function () {
      Route::get('/', [UsersController::class, 'index'])->name('index');
      Route::get('/add', [UsersController::class, 'add'])->name('add');
      Route::post('/add', [UsersController::class, 'storeAdd'])->name('store');
      Route::get('/edit/{id}', [UsersController::class, 'getEdit'])->name('edit');
      Route::post('update', [UsersController::class, 'postEdit'])->name('postEdit');
      Route::get('/delete/{id}', [UsersController::class, 'delete'])->name('delete');
});