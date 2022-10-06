<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class o extends Model
{
    protected $fillable = [
        'Nº',
        'valor',
        'quantidade_peças',
        'funilaria',
        'preparação',
        'pintura',
        'montagem',
        'polimento',
        'gastos',
    ];
    use HasFactory;
}
