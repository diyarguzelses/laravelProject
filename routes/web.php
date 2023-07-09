<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//anasayfa
Route::get('/','App\Http\Controllers\AnasayfaController@index')->name('anasayfa');

//kategori
Route::get('/kategori/{slug_kategoriadi}','App\Http\Controllers\KategoriController@index')->name('kategori');


