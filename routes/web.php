<?php

use App\Http\Controllers\DetailProduk;
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
    return view('index');
})->name('home');

Route::get('/semua-produk', function () {
    return view('semua_produk');
})->name('semua-produk');

Route::get('/rakit-laptop', function () {
    return view('rakit_laptop');
})->name('rakit-laptop');

Route::get('/detail-produk/{id}', [DetailProduk::class, 'show']);
