<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\KategoriController;
use App\Models\Kategori;
use App\Http\Controllers\TokohController;
use App\Models\Tokoh;

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
    return view('welcome');
});

Route::get('mulai', function () {
    return view('mulai');
});

Route::get('tes', function () {
    return view('tes');
});

Route::get('welcome', [FrontController::class, 'welcome']);
Route::get('mulai', [FrontController::class, 'mulai']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('kategori', KategoriController::class);
Route::resource('tokoh', TokohController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mulai', [FrontController::class, 'index']);
