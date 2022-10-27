<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use App\Http\Controllers\ProdutosController;

use Illuminate\Support\Facades\App;

use Illuminate\Routing\Controller as BaseController;

use DB;



class Produto extends Model
{
    protected $fillable =['descrição', 'preço', 'quantidade'];
    use HasFactory;
}


