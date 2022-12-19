<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classificacao extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'classificacoes';

    protected $fillable = [
        'titulo',
        'descricao'
    ];

    public function filmes()
    {
        return $this->hasMany(Filme::class, 'classificacao_id', 'id');
    }
}
