<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

class MateriaisController extends Controller
{
   public function index()
   {
       $produtos = Produto::all();
       return view('materias', compact ('produtos'));
   } //
}
