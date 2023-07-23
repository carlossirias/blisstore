<?php

use App\Http\Controllers\CursosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Login;
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

Route::get('/', function(){
    return "Estas en el inicio: ve a la pagina <a href='/blisstore/public/register'>Registrar</a>";
});

Route::get('/home', [HomeController::class,'view'])->name('home.index');

Route::post('/login', [LoginController::class, 'create'])->name('login');

Route::get('/logout', [HomeController::class, 'logout'])->name('home.logout');

Route::get('/terms_and_conditions', [RegisterController::class, 'viewTermsConditions'])->name('terms.conditions');

Route::get('/register', [RegisterController::class, 'view'])->name('register');

Route::post('/create_register', [RegisterController::class, "create"])->name("register.create");

Route::get('products', [ProductsController::class,'index']);

Route::get('products/{productName}', [ProductsController::class, 'viewDetails']);

