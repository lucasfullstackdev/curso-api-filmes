<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diretor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'diretores';

    protected $fillable = [
        'nome'
    ];

    public function filmes()
    {
        return $this->hasManyThrough(Filme::class, FilmeDiretor::class, 'diretor_id', 'id', 'id', 'filme_id');
    }
}
