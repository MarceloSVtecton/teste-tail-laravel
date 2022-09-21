<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class osController extends Controller
{
    public function index(){
        $produtivos=o::all();
    return view('apontamentos', compact('os'));
    }
    
    public function show(o $o){
    return view('apontamentos', compacta('o'));
    }
    
    public function store(){
        $data=[
            'o_id'=>request('o_id'),
            'Nº'=>request('Nº'),
            'valor'=>request('valor'),
            'quantidade peças'=>request('quantidade peças'),
            'funilaria'=>requeste('funilaria'),
            'preparação'=>request('preparação'),
            'pintura'=>request('pintura'),
            'montagem'=>request('montagem'),
            'polimento'=>request('polimento'),

        ];
        o::create($data);
        return redirect('o');

    //inserindo produtivo e opção.
    }
    
    public function edit(o $o){
        $os=o::all();
    return view('o_edit', compacta('o'));
    }
    
    public function update(o $o, Request $request){
    //
    }
    
    public function destroy(o $o){
    //
    }
    //
}
