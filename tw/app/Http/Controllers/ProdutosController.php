<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use DB;

use App\Http\Controllers\ProdutosController;

use App\Models\Produto;

use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\App;


use Illuminate\Support\Facades\Input;


class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();

        return view('materiais', compact ('produtos'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produtos = Produto::all();
        return view('materialincluir', compact ('produtos'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = [
            'descrição' => request('descrição'),
            'preço' => request('preço'),
            'quantidade' => request('quantidade'),
     
        ];
        Produto::create($input);
        
         return view('materialincluir');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto=$this->objproduto->find($id);
        return view('materialeditar', [
            'produto' => $produto 
        ]);
    }
       

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Produto $produto, Request $request)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
