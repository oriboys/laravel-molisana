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
  $pasta = config('pasta');

    $pasta_lunga = array_filter($pasta, function($element){
      // dump($element);
      // ritorna le paste dove l'elemento ha il tipo = a lunga
      return $element['tipo'] == 'lunga';

    });
    $pasta_corta = array_filter($pasta, function($element){
      // dump($element);
      // ritorna le paste dove l'elemento ha il tipo = a corta
      return $element['tipo'] == 'corta';

    });
    $pasta_cortissima = array_filter($pasta, function($element){
      // dump($element);
      // ritorna le paste dove l'elemento ha il tipo = a cortissima
      return $element['tipo'] == 'cortissima';

    });



    $data = ['formati' => [
            'lunga' => $pasta_lunga,
            'corta' => $pasta_corta,
            'cortissima' => $pasta_cortissima
      ]];

    return view('products', $data);
})->name('pagina-prodotti');
Route::get('/notizie', function () {
    $pasta = config('pasta');
  $data = ['formati' => $pasta];
    return view('news', $data);
})->name('pagina-notizie');
