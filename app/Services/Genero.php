<?php

namespace App\Services;

use App\Models\Genero as ModelsGenero;

class Genero extends Service implements IService
{
    protected $model = ModelsGenero::class;
}
