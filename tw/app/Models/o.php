<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class os extends Model
{
    protected $fillable = [
        'Nº',
        'valor',
        'quantidade peças',
        'funilaria',
        'preparação',
        'pintura',
        'montagem',
        'polimento',
        'gastos',
    ];
    use HasFactory;
}
