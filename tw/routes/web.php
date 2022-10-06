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
});

Route::get('/materiais', function() {
    return view('materiais');
});

use App\Http\Controllers\MateriaisController;
 
Route::get('materiais', [MateriaisController::class, 'index']);

use App\Http\Controllers\ProdutosController;
 
Route::get('materiais', [ProdutosController::class, 'index']);

Route::get('/produtos/search', 'ProdutosController@search');