<?php

use App\Http\Controllers\DetailProduk;
use App\Models\Produk;
use App\Models\RakitLaptop;
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
    $produks_json = Produk::all()->toJson();
    return view('semua_produk', ['produks_json' => $produks_json]);
})->name('semua-produk');

Route::get('/rakit-laptop', function () {
    $rakit_laptop_json = RakitLaptop::with('items')->get()->toJson();
    return view('rakit_laptop', ['rakit_laptop_json' => $rakit_laptop_json]);
})->name('rakit-laptop');

Route::get('/detail-produk/{id}', [DetailProduk::class, 'show']);
