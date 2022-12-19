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
}
