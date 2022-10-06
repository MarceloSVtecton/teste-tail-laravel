<?php

namespace App\Http\Controllers;


use App\Models\Produto;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;


class ProdutosController extends Controller
{
    public function index(){
        $produtos=Produto::all();
    return view('materiais', compact ('produtos'));
    }

    public function search(){
        $produtos = Produto::all();
        foreach ($produtos as $produto){
            echo $produto->descrição . "<br>";
        }

    }
    
    public function show(Produto $produto){
    return view('materiais', compacta('produto'));
    }
    
    public function store(){
        $data=[
            'descrição'=>request('descrição'),
            'preço'=>request('preço'),
            'quantidade'=>request('quantidade'),
        ];
        Produto::create($data);
        return redirect('materiais');

    
    }
    
    public function edit(Produto $produto){
        $produtos=Produto::all();
    return view('materiais', compacta('produto'));
    }
    
    public function update(Produto $produto, Request $request){
    //
    }
    
    public function destroy(Produto $produto){
    //
    }
    }