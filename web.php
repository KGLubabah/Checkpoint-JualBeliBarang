<?php

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


                                //1. echolangsung nested
Route::get('/', function () {
    //return view('welcome');
    echo "yoi sam";
});
Route::get('/satu', function () {
    //return view('welcome');
    echo "one";
});
Route::get('/dua', function () {
    //return view('welcome');
    echo "two";
});
Route::get('/tiga', function () {
    //return view('welcome');
    echo "three";
});
Route::get('/empat', function () {
    //return view('welcome');
    echo "four";
});
Route::get('/lima', function () {
    //return view('welcome');
    echo "five";
});
Route::get('/enam', function () {
    //return view('welcome');
    echo "six";
});
Route::get('/tujuh', function () {
    //return view('welcome');
    echo "seven";
});
Route::get('/delapan', function () {
    //return view('welcome');
    echo "eight";
});
Route::get('/sembilan', function () {
    //return view('welcome');
    echo "nine";
});
Route::get('/sepuluh', function () {
    //return view('welcome');
    echo "ten";
});

//2. Memanggil view
Route::get('/sembilan', function () {
    return view('kerupuk');

});

Route::get('/nemplate', function()
{
    return view('template');
});

//3. Memanggil Controller
Route::get('/usang', 'UsangController@index');
    // Nama file controllernya 'UsangController'
    // nama url usang
    // nama functionnya index
Route::get('usang', 'UsangController@godog');

Route::get('/CleaningServise', 'CleanerController@cleaner');


Route::get('kontak', 'Kontak@index');


Route::resource('kontak', 'KontakKontak');
Route::get('/', function()
{
    return view('index');
});

Route::get('login', 'login@index');
Route::post('login/cek', 'Login@cek');

Route::get('/mam', 'Dashboard@index');

Route::get('/logout' , 'login@logout');

Route::resource('/satpam', 'Satpam');

Route::resource('/kabupaten', 'Kabupaten');

// BARANG _ PENJUALAN _ PEMBELIAN

Route::resource('/barang', 'Barang');
Route::resource('/penjualan', 'Penjualan');
Route::resource('/pembelian', 'Pembelian');
