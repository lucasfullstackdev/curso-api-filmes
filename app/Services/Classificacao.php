<?php

namespace App\Services;

use App\Models\Classificacao as ModelsClassificacao;

class Classificacao extends Service implements IService
{
    protected $model = ModelsClassificacao::class;
}
