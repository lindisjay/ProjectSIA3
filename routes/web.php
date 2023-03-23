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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['role:admin']], function () {
    //User
    Route::resource('/user', 'userController');
    Route::get('/user/hapus/{id}', 'userController@destroy');
    //Barang
    Route::resource('/barang', 'barangController');
    Route::get('/barang/hapus/{id}', 'barangController@destroy');
    //Supplier
    Route::resource('/supplier', 'supplierController');
    Route::get('/supplier/hapus/{id}', 'supplierController@destroy');
    //Akun
    Route::resource('/akun', 'AkunController');
    Route::get('/akun/edit/{id}', 'AkunController@edit');
    Route::get('/akun/hapus/{id}', 'AkunController@destroy');
    //setting
    Route::get('/setting', 'SettingController@index')->name('setting.transaksi')->middleware('role:admin');
    Route::post('/setting/simpan', 'SettingController@simpan');
    //Pemesanan
    Route::get('/transaksi', 'PemesananController@index')->name('pemesanan.transaksi');
    Route::post('/sem/store', 'PemesananController@store');
    Route::get('/transaksi/hapus/{kd_brg}', 'PemesananController@destroy');
    //Detail Pesan
    Route::post('/detail/store', 'DetailPesanController@store');
    Route::post('/detail/simpan', 'DetailPesanController@simpan');
});
