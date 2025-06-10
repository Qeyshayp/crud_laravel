<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('barang', BarangController::class); //nambahin ini

Route::get('/barang', [BarangController::class, 'index'])->name('barang'); //link untuk mengakses web nya nanti

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/blog', function () {
    return view('barang.blog');
});

Route::get('/artikel1', function () {
    return view('barang.artikel1');
});

Route::get('/artikel2', function () {
    return view('barang.artikel2');
});

Route::get('/bioskop', function () {
    return view('bioskop.menubioskop');
});

Route::get('/listfilm', function () {
    return view('bioskop.listfilm');
});

Route::get('/listcinema', function () {
    return view('bioskop.listcinema');
});
