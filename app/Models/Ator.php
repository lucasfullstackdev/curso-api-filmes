<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ator extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'atores';

    protected $fillable = [
        'nome'
    ];

    public function filmes()
    {
        return $this->hasManyThrough(Filme::class, FilmeAtor::class, 'ator_id', 'id', 'id', 'filme_id');
    }
}
