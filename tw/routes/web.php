<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriaisController;
use App\Http\Controllers\ProdutoController;
use App\Models\Produto;

Route::get('/', function () {
    return view('home');
});

Route::get('/materiais', function() {
    return view('materiais');
});

Route::get('/materialincluir', function(){
    return view('materialincluir');
});



Route::get('/materialeditar', function () {
    return view('materialeditar');
});

 
Route::get('/materiais', 'ProdutosController@index');

 
Route::get('/materiais', 'ProdutosController@index');

Route::resource('/produto', 'ProdutosController');

Route::resource('/produto/{id}', 'ProdutosController@edit');

Route::resource('/produto/edit/{id}', 'ProdutosController@update')->name('alterar_produto');