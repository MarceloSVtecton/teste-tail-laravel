<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
class ProdutosController extends Controller
{
    public function create()
    {
        return view('materiais');
    }
    public function store(Request $request)
    {
        Produto::create([
            'descrição' => $request->descrição,
            'preço' => $request->preço,
            'quantidade' => $request->quantidade,
        ]);
        return "Produto Cadastrado com Sucesso";
        
    }
    //
}
