<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormJualController; //ini tambahan versi 8
use App\Http\Controllers\FormRegistrasiController;
use App\Http\Controllers\TampilJual;
use App\Http\Controllers\ViewController;

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
});

// Route::get('/menu', function () {
//     return view('MenuView');
// });
// Route::get('/variant', function () {
//     return view('VariantMenu');
// });
// Route::get('/daftartransaksi', function () {
//     return view('DaftarTransaksi');
// });

//tampil halaman
Route::get('/menu', [ViewController::class, 'menu']);
Route::get('/variant', [ViewController::class, 'variant']);
Route::get('/about', [ViewController::class, 'about']);
Route::get('/login', [ViewController::class, 'login']);
Route::get('/registrasi', [ViewController::class, 'registrasi']);

//untuk menampilkan Hasil Form Order
Route::get('/order', [FormJualController::class, 'FormBeli']);
Route::post('/order/storepenjualan', [FormJualController::class, 'store'])->name('store.order');
Route::get('/daftartransaksi', [TampilJual::class, 'TampilJual'])->name('daftarpenjualan');
