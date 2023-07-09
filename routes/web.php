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
//ödeme
Route::get('/odeme','App\Http\Controllers\OdemeController@index')->name('odeme');
Route::post('/odemeyap','App\Http\Controllers\OdemeController@odemeyap')->name('odemeyap');



Route::group(['prefix'=>'sepet'], function(){

    Route::get('/','App\Http\Controllers\SepetController@index')->name('sepet');
    Route::post('/ekle','App\Http\Controllers\SepetController@ekle')->name('sepet.ekle');
    Route::delete('/kaldir/{rowId}','App\Http\Controllers\SepetController@kaldir')->name('sepet.kaldir');
    Route::delete('/bosalt','App\Http\Controllers\SepetController@bosalt')->name('sepet.bosalt');
    Route::POST('/guncelle/{rowId}','App\Http\Controllers\SepetController@guncelle')->name('sepet.guncelle');

});

//siparişler
Route::get('/siparisler','App\Http\Controllers\SiparislerController@index')->name('siparisler');
//siparişdetay
Route::get('/siparisler/{id}','App\Http\Controllers\SiparislerController@detay')->name('siparis');

});
