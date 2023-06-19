<?php

namespace App\Faker;

use Faker\Provider\Base;

class ClassificacaoProvider extends Base
{

    protected array $classificacoes = [
        'livre',
        'classificação C-1',
        'classificação C-2',
        'classificação C-3',
        'outra Classificação'
    ];

    public function classificacao(): string
    {
        return self::randomElement($this->classificacoes);
    }
}
