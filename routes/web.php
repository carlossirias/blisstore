<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('register');
});

Route::post('/create_register', [RegisterController::class, "create"])->name("register.create");

Route::get('products', [ProductsController::class,'index']);

Route::get('products/{productName}', [ProductsController::class, 'viewDetails']);

