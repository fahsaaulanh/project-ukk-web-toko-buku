<?php

use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

Auth::routes();

Route::get('/', function () {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    // Route Distributor
    Route::resource('distributor', 'DistributorController');

    // Route Buku
    Route::resource('buku', 'BukuController');

    //Pasok
    Route::resource('pasok', 'PasokController');

    //User
    Route::resource('pengguna', 'PenggunaController');

    // Route Laporan-admin
    Route::get('laporan-admin', function () {
        return view('laporan');
    });
    Route::get('laporan-admin/databuku', 'LaporanController@databuku');
    Route::get('laporan-admin/caripenulis', 'LaporanController@caripenulis');
    Route::post('laporan-admin/berdasarkanpenulis', 'LaporanController@cetakpenulis');
    Route::get('laporan-admin/tidakterjual', 'LaporanController@tidakterjual');
    Route::get('laporan-admin/seringterjual', 'LaporanController@seringterjual');
    Route::get('laporan-admin/pasok', 'LaporanController@pasok');

    //Penjualan
    Route::get('penjualan/transaksi', 'PenjualanController@transaksi');
    Route::post('penjualan/checkout', 'PenjualanController@checkout');
    Route::post('penjualan/store', 'PenjualanController@store');
    Route::get('penjualan/data', 'PenjualanController@data');
    Route::get('penjualan/tanggal', 'PenjualanCOntroller@tanggal');
    Route::post('penjualan/tanggal', 'PenjualanController@pertanggal');

    //Faktur
    Route::get('faktur', 'FakturController@index');
    Route::get('faktur/cek', 'FakturController@cek');
    Route::get('faktur/{id}', 'FakturController@faktur');
    Route::get('faktur/{id}/struk', 'FakturController@struk');
});
