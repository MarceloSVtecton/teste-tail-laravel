<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutivosController extends Controller
{
    public function index(){
        $produtivos=Produtivo::all();
    return view('produtivos', compact('produtivos'));
    }
    
    public function show(Produtivo $produtivo){
    return view('produtivo', compacta('produtivo'));
    }
    
    public function store(){
    //
    }
    
    public function edit(Produtivo $produtivo){
        produtivo=Produtivo::all();
    return view('produtivo_edit', compacta('produtivo'));
    }
    
    public function update(Produtivo $produtivo, Request $request){
    //
    }
    
    public function destroy(Produtivo $produtivo){
    //
    }
    }
