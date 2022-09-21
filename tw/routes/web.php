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
Route::get('/os', function () {
    return view('os');
});
Route::get('/materiais',function () {
    return view('materiais');
});
Route::get('/materiais', 'ProdutosController@create', function() {
    return view('materiais');
});
    
Route::post('/materiais', 'ProdutosController@store')->name('cadastrar_material');

Route::get('produtivos','ProdutivosController@index');
Route::post('produtivos', 'ProdutivosController@store');
Route::get('produtivos/{produtivo}', 'ProdutivosController@show');
Route::get('produtivos/{produtivo}/edit', 'ProdutivosController@edit');
Route::patch('produtivos/{produtivo}', 'ProdutivosController@update');
Route::delete('produtivos/{produtivo}', 'ProdutivosController@destroy');


Route::get('/apontamentos', function () {
    return view('apontamentos');
});
Route::get('os','osController@index');
Route::post('os', 'osController@store');
Route::get('os/{o}', 'osController@show');
Route::get('os/{o}/edit', 'osController@edit');
Route::patch('os/{o}', 'osController@update');
Route::delete('os/{o}', 'osController@destroy');






Route::get('/comissoes', function () {
    return view('comissoes');
});
Route::get('/user', function () {
    return view('login');
});
