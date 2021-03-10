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
    return view('home');
})->name('pagina-home');
Route::get('/prodotti', function () {
    return view('products');
})->name('pagina-prodotti');
Route::get('/notizie', function () {
    return view('news');
})->name('pagina-notizie');
