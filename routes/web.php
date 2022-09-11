<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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

Route::get('/auth',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::get('/logout',[AuthController::class,'logout']);

/* Homepage Routes */

Route::get('/home', [HomeController::class,'index']);
Route::get('/gallery', [HomeController::class,'gallery']);
Route::get('/about', [HomeController::class,'about']);
Route::get('/contact', [HomeController::class,'contact']);

Route::get('/artikel', [HomeController::class,'artikel']);
Route::get('/artikel/{id}', [HomeController::class,'detailArtikel']);

Route::get('/kegiatan', [HomeController::class,'kegiatan']);
Route::get('/kegiatan/{id}', [HomeController::class,'detailKegiatan']);

/* ====================== Dashboard Routes ====================== */

Route::middleware(['auth', 'checkRole:Admin,User'])->group(function () {
    /* Dashboard Routes */
    Route::get('/dashboard', [AdminController::class,'index']);
});  

/* ====================== Admin Routes ====================== */
Route::middleware(['auth', 'checkRole:Admin'])->group(function () {

    /* Kegiatan Routes */
    Route::get('/admin/kegiatan', [AdminController::class,'kegiatan']);
    Route::post('/admin/kegiatan/add', [AdminController::class,'addKegiatan']);
    Route::get('/admin/kegiatan/delete/{id}', [AdminController::class,'delKegiatan']);
    Route::get('/admin/kegiatan/detail/{id}', [AdminController::class,'detKegiatan']);
    Route::put('/admin/kegiatan/update', [AdminController::class,'updKegiatan']);

    /* Artikel Routes */
    Route::get('/admin/artikel', [AdminController::class,'artikel']);
    Route::get('/admin/artikel/tambah', [AdminController::class,'tambahArtikel']);
    Route::post('/admin/artikel/add', [AdminController::class,'addArtikel']);
    Route::put('/admin/artikel/update', [AdminController::class,'updArtikel']);
    Route::get('/admin/artikel/delete/{id}', [AdminController::class,'delArtikel']);
    Route::get('/admin/artikel/verifikasi/{id}', [AdminController::class,'verArtikel']);
    Route::get('/admin/artikel/detail/{id}', [AdminController::class,'detArtikel']);

    /* Gallery Routes */
    Route::get('/admin/gallery', [AdminController::class,'gallery']);
    Route::get('/admin/gallery/add', [AdminController::class,'addGallery']);
    Route::get('/admin/gallery/detail', [AdminController::class,'detGallery']);

    /* User Routes */
    Route::get('/admin/user', [AdminController::class,'user']);
    Route::get('/admin/user/add', [AdminController::class,'addUser']);
    Route::get('/admin/user/detail', [AdminController::class,'detUser']);

});

/* ====================== User Routes ====================== */
Route::middleware(['auth', 'checkRole:User'])->group(function () {

    /* Artikel Routes */
    Route::get('/user/artikel', [AdminController::class,'artikel']);
    Route::get('/user/artikel/add', [AdminController::class,'addArtikel']);
    Route::get('/user/artikel/detail', [AdminController::class,'detArtikel']);

});