<?php

namespace App\Services;

use App\Models\Diretor as ModelsDiretor;

class Diretor extends Service implements IService
{
    protected $model = ModelsDiretor::class;
}
