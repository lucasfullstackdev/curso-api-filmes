<?php

namespace App\Services;

use App\Models\Filme as ModelsFilme;

class Filme extends Service implements IService
{
    protected $model = ModelsFilme::class;
}
