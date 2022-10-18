<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;


class ProdutosController extends Controller

{  
     public function index(){
        $produtos = Produto::all();
    return view('materiais', compact ('produtos'));
    }
    
    

    public function create(){
        $produtos = Produto::all();
    return view('materialincluir', compact ('produtos'));
    
    }
    
    public function store(Request $request){
        
       $input = [
           'descrição' => request('descrição'),
           'preço' => request('preço'),
           'quantidade' => request('quantidade'),
    
       ];
       Produto::create($input);
       
        return view('materialincluir');
       
         
       
       
       }
    
    public function edit(Produto $produto){
        
    return view('materialeditar');
    }
    
    public function update(Produto $produto, Request $request){
    //
    }
    
    public function destroy(Produto $produto){
    //
    }
}