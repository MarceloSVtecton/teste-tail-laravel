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
Route::get('/materiais', function () {
    return view('materiais');
});
Route::get('/apontamentos', function () {
    return view('apontamentos');
});
Route::get('/comissoes', function () {
    return view('comissoes');
});
Route::get('/user', function () {
    return view('user');
});
