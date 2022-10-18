<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriaisController;
use App\Http\Controllers\ProdutosController;
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

 
Route::get('/materiais', [ProdutosController::class, 'index']);

 
Route::get('/materiais', [ProdutosController::class, 'index']);

Route::post('/materialincluir/create', 'ProdutosController@store');

Route::get('/materialincluir/', 'ProdutosController@create');

Route::get('/produto/{produto}/edit', [ProdutosController::class,'edit'])->name('produto.edit');

Route::post('/produto/{produto}', [ProdutosController::class,'update'])->name('produto.update');



Route::get('/produto/search', 'ProdutosController@search');