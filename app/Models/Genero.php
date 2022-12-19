<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genero extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'generos';

    protected $fillable = [
        'titulo'
    ];

    public function filmes()
    {
        return $this->hasManyThrough(Filme::class, FilmeGenero::class, 'genero_id', 'id', 'id', 'filme_id');
    }
}
