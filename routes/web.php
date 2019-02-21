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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/sidebaradmin', function () {
//     return view('layouts.sidebaradmin');
// });

// Route::get('/header', function () {
//     return view('layouts.header');
// });

// Route::get('/headeradmin', function () {
//     return view('layouts.headeradmin');
// });

Route::get('/masteradmin', function () {
    return view('layouts.masteradmin');
});

// Route::get('/master', function () {
//     return view('layouts.master');
// });

// Route::get('/footer', function () {
//     return view('layouts.footer');
// });

// Route::get('/informasi', function () {
//     return view('informasi.index');
// });


// Route::get('/informasii', function () {
//     return view('informasi.create');
// });

// Route::get('/informasi/edit', function () {
//     return view('informasi.edit');
// });


// Route::resource('das', 'DasController');
// Route::resource('informasi', 'InformasiController');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('informasi', 'InformasiController@index')->name('informasi.index');

