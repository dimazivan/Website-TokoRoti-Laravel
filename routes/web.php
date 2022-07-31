<?php

use App\Http\Controllers\FormBahan;
use App\Http\Controllers\FormBahanController;
use App\Http\Controllers\FormBeliController;
use App\Http\Controllers\FormDaftarAdmin;
use App\Http\Controllers\FormDaftarUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormJualController; //ini tambahan versi 8
use App\Http\Controllers\FormKeuntungan;
use App\Http\Controllers\FormProdukController;
use App\Http\Controllers\FormSupplierController;
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
Route::get('/indexlogin', function () {
    return view('indexlogin');
});

Route::get('/indexadmin', function () {
    return view('indexadmin');
});

//tampil halaman
Route::get('/menu', [ViewController::class, 'menu']);
Route::get('/variant', [ViewController::class, 'variant']);
Route::get('/about', [ViewController::class, 'about']);
Route::get('/login', [ViewController::class, 'login']);

//tampil halaman login
Route::get('/menulogin', [ViewController::class, 'menulogin']);
Route::get('/variantlogin', [ViewController::class, 'variantlogin']);
Route::get('/aboutlogin', [ViewController::class, 'aboutlogin']);
Route::get('/daftartransaksilogin', [FormJualController::class, 'TampilJualLogin']);

//untuk menampilkan Hasil Form Order
Route::get('/orderlogin', [FormJualController::class, 'FormBeli']);
Route::post('/orderlogin/storepenjualan', [FormJualController::class, 'storepenjualan'])->name('store.order');
Route::get('/daftartransaksi', [FormJualController::class, 'TampilJual'])->name('daftarpenjualan');
Route::get('/order/hapuspenjualan/{id_penjualan}', [FormJualController::class, 'delpenjualan'])->name('hapuspenjualan');

//untuk menampilkan form daftar user
Route::get('/registrasi', [FormDaftarUser::class, 'registrasi']);
Route::post('/registrasi/daftar', [FormDaftarUser::class, 'storeregistrasi'])->name('store.daftar');

// ZONA ADMIN ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Route::get('/daftartransaksipenjualan', [FormJualController::class, 'TampilJualAdmin'])->name('daftarpenjualanadmin');
Route::get('/daftartransaksipenjualan/proses/{id_penjualan}', [FormJualController::class, 'proses'])->name('proses');
Route::get('/daftartransaksipenjualan/tolak/{id_penjualan}', [FormJualController::class, 'tolak'])->name('tolak');

//untuk menampilkan form daftar user (admin)
Route::get('/daftarlistuser', [FormDaftarAdmin::class, 'TampilUser'])->name('daftarlistuser');
Route::get('/formuser', [FormDaftarAdmin::class, 'registrasiadmin'])->name('tampilformuser');
Route::post('/formuser/storedaftar', [FormDaftarAdmin::class, 'storeregistrasiadmin'])->name('store.daftaradmin');
Route::get('/formuser/edituser/{id_user}', [FormDaftarAdmin::class, 'tampiledituser'])->name('tampiledituser');
Route::post('/formuser/updateuser/{id_user}', [FormDaftarAdmin::class, 'updateuser'])->name('updateuser');
Route::get('/formuser/hapususer/{id_user}', [FormDaftarAdmin::class, 'deluser'])->name('hapususer');

//untuk menampilkan daftar form bahan (admin)
Route::get('/daftarlistbahan', [FormBahanController::class, 'TampilBahan'])->name('daftarlistbahan');
Route::get('/formbahan', [FormBahanController::class, 'formbahan'])->name('tampilformbahan');
Route::post('/formbahan/storetambahbahan', [FormBahanController::class, 'storebahan'])->name('store.bahan');

Route::get('/formbahan/editbahan/{id_bahan}', [FormBahanController::class, 'tampileditbahan'])->name('tampileditbahan');
Route::post('/formbahan/updatebahan/{id_bahan}', [FormBahanController::class, 'updatebahan'])->name('updatebahan');
Route::get('/formbahan/hapusbahan/{id_bahan}', [FormBahanController::class, 'delbahan'])->name('hapusbahan');

//untuk menampilkan form beli bahan (admin)
Route::get('/formbahan/belibahan/{id_bahan}', [FormBeliController::class, 'formbelibahan'])->name('tampilbelibahan');
Route::post('/formbahan/storebahan/{id_bahan}', [FormBeliController::class, 'storepembelian'])->name('store.belibahan');
Route::get('/orderbahan/hapuspembelian/{id_pembelian}', [FormBeliController::class, 'delpembelian'])->name('hapuspembelian');
Route::get('/daftartransaksipembelian', [FormBeliController::class, 'TampilBeli'])->name('daftarpembelian');

//untuk menampilkan daftar form supplier (admin)
Route::get('/daftarlistsupplier', [FormSupplierController::class, 'TampilSupplier'])->name('daftarlistsupplier');
Route::get('/formsupplier', [FormSupplierController::class, 'formsupplier'])->name('tampilformsupplier');
Route::post('/formsupplier/storesupplier', [FormSupplierController::class, 'storesupplier'])->name('store.supplier');
Route::get('/formsupplier/editsupplier/{id_supplier}', [FormSupplierController::class, 'TampilEditSupplier'])->name('tampileditsupplier');
Route::post('/formsupplier/updatesupplier/{id_supplier}', [FormSupplierController::class, 'updatesupplier'])->name('updatesupplier');
Route::get('/formsupplier/hapussupplier/{id_supplier}', [FormSupplierController::class, 'delsupplier'])->name('hapussupplier');

//untuk menampilkan daftar form produk(admin)
Route::get('/daftarlistproduk', [FormProdukController::class, 'TampilProduk'])->name('daftarlistproduk');
Route::get('/formproduk', [FormProdukController::class, 'formproduk'])->name('tampilformproduk');
Route::post('/formproduk/storeproduk', [FormProdukController::class, 'storeproduk'])->name('store.produk');
Route::get('/formproduk/editproduk/{id_produk}', [FormProdukController::class, 'TampilEditProduk'])->name('tampileditproduk');
Route::post('/formproduk/updateproduk/{id_produk}', [FormProdukController::class, 'updateproduk'])->name('updateproduk');
Route::get('/formproduk/hapusproduk/{id_produk}', [FormProdukController::class, 'delproduk'])->name('hapusproduk');

//untuk menampilkan keuntungan(admin)
Route::get('/profit', [FormKeuntungan::class, 'TampilKeuntungan'])->name('keuntungan');
