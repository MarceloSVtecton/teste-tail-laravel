<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutivosController extends Controller
{
    public function index(){
    return view(‘resultado’);
    }
    
    public function show(Product $product){
    return view(‘resultado’);
    }
    
    public function store(){
    //
    }
    
    public function edit(Produtivo $produtivo){
    return view(‘produtivo_edit’);
    }
    
    public function update(Produtivo $produtivo, Request $request){
    //
    }
    
    public function destroy(Produtivo $produtivo){
    //
    }
    }
