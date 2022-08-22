<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
Route::get('/kegiatan', [HomeController::class,'kegiatan']);
Route::get('/kegiatan/detail', [HomeController::class,'detailKegiatan']);

/* Admin Routes */
Route::get('/admin', [AdminController::class,'index']);

/* Kegiatan Routes */
Route::get('/admin/kegiatan', [AdminController::class,'kegiatan']);
Route::get('/admin/kegiatan/add', [AdminController::class,'addKegiatan']);

