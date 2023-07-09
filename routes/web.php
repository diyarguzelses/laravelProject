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

Route::group(['prefix'=>'kullanici'],function(){
    //OturumAc
    Route::get('/oturumac','App\Http\Controllers\KullaniciController@giris_form')->name('kullanici.oturumac');
    Route::post('/oturumac','App\Http\Controllers\KullaniciController@giris');
    //Kaydol
    Route::get('/kaydol','App\Http\Controllers\KullaniciController@kaydol_form')->name('kullanici.kaydol');
    Route::post('/kaydol','App\Http\Controllers\KullaniciController@kaydol');
    //çıkışyap
    Route::post('/oturumukapat','App\Http\Controllers\KullaniciController@oturumukapat')->name('kullanici.oturumukapat');
});

