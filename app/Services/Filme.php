<?php

namespace App\Services;

use App\Models\Filme as ModelsFilme;

class Filme extends Service implements IService
{
    protected $model = ModelsFilme::class;

    public function atores(int $id)
    {
        $filme = $this->find($id);

        if (empty($filme)) {
            return $this->error('Entidade não encontrada!');
        }

        return $this->success(
            $filme->atores
        );
    }

    public function diretores(int $id)
    {
        $filme = $this->find($id);

        if (empty($filme)) {
            return $this->error('Entidade não encontrada!');
        }

        return $this->success(
            $filme->diretores
        );
    }

    public function generos(int $id)
    {
        $filme = $this->find($id);

        if (empty($filme)) {
            return $this->error('Entidade não encontrada!');
        }

        return $this->success(
            $filme->generos
        );
    }

    public function classificacao(int $id)
    {
        $filme = $this->find($id);

        if (empty($filme)) {
            return $this->error('Entidade não encontrada!');
        }

        return $this->success(
            $filme->classificacao
        );
    }
}
