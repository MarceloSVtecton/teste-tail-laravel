<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class material extends Model
{
    protected $fillable = ['nome', 'preço', 'quantidade'];
    use HasFactory;
}
