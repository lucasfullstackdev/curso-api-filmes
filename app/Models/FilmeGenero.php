<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmeGenero extends Model
{
    use HasFactory;

    protected $table = 'filme_generos';
    
    protected $fillable = [
        'filme_id',
        'genero_id'
    ];
}
