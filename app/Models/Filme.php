<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Filme extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'filmes';

    protected $fillable = [
        'titulo',
        'lancamento_at',
        'duracao',
        'classificacao_id',
        'sinopse'
    ];

    public function classificacao()
    {
        return $this->hasOne(Classificacao::class, 'id', 'classificacao_id');
    }

    public function generos()
    {
        return $this->hasManyThrough(Genero::class, FilmeGenero::class, 'filme_id', 'id', 'id', 'genero_id');
    }

    public function atores()
    {
        return $this->hasManyThrough(Ator::class, FilmeAtor::class, 'filme_id', 'id', 'id', 'ator_id');
    }

    public function diretores()
    {
        return $this->hasManyThrough(Diretor::class, FilmeDiretor::class, 'filme_id', 'id', 'id', 'diretor_id');
    }
}
