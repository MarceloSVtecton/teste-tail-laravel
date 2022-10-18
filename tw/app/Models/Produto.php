<?php

namespace App\Models;

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable =['descrição', 'preço', 'quantidade'];
    use HasFactory;
}
