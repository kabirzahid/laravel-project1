<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\TeemController;

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
Route::get('/',[HomeController::class,'index']);

Route::resource('/service',ServiceController::class);
Route::resource('/product',ProductController::class);
Route::resource('/teem',TeemController::class);
Route::resource('/contact',ContactController::class);
Route::resource('/about',AboutController::class);






