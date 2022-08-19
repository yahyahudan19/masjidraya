<?php

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


Route::get('/', [HomeController::class,'index']);

/* Login Routes */
Route::get('/login', function () {
    return view('auth/index');
});

/* Homepage Routes */
Route::get('/home', [HomeController::class,'index']);
Route::get('/galery', [HomeController::class,'galery']);
Route::get('/about', [HomeController::class,'about']);
Route::get('/contact', [HomeController::class,'contact']);


/* Admin Routes */
Route::get('/admin', [AdminController::class,'index']);


