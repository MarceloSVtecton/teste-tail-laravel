<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtivos extends Model
{
    protected $fillable = [
        'nome',
        'opção',
    ];
    use HasFactory;
}
