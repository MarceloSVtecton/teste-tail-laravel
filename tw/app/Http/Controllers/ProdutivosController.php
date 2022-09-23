<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use produtivo;

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
        $data=[
            'produtivo_id'=>request('produtivo_id'),
            'nome'=>request('nome'),
            'opção'=>request('opção'),
        ];
        Produtivo::create($data);
        return redirect('produtivo');

    //inserindo produtivo e opção.
    }
    
    public function edit(Produtivo $produtivo){
        $produtivos=Produtivo::all();
    return view('produtivo_edit', compacta('produtivo'));
    }
    
    public function update(Produtivo $produtivo, Request $request){
    //
    }
    
    public function destroy(Produtivo $produtivo){
    //
    }
    }
