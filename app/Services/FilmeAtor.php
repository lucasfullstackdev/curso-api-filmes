<?php

namespace App\Services;

use App\Models\Filme;
use App\Models\FilmeAtor as ModelsFilmeAtor;
use Illuminate\Foundation\Http\FormRequest;

class FilmeAtor extends Service implements IService
{
    protected $model = Filme::class;

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

    public function store(FormRequest $request)
    {
        $filmeAtor = ModelsFilmeAtor::create($request->all());

        return $this->success($filmeAtor);
    }

    public function destroy(int $id)
    {
        $filmeAtor = ModelsFilmeAtor::find($id);

        if (empty($filmeAtor)) {
            return $this->error('Entidade não encontrada!');
        }

        $filmeAtor->delete();

        return $this->success($filmeAtor);
    }

    // public function diretores(int $id)
    // {
    //     $filme = $this->find($id);

    //     if (empty($filme)) {
    //         return $this->error('Entidade não encontrada!');
    //     }

    //     return $this->success(
    //         $filme->diretores
    //     );
    // }

    // public function generos(int $id)
    // {
    //     $filme = $this->find($id);

    //     if (empty($filme)) {
    //         return $this->error('Entidade não encontrada!');
    //     }

    //     return $this->success(
    //         $filme->generos
    //     );
    // }

    // public function classificacao(int $id)
    // {
    //     $filme = $this->find($id);

    //     if (empty($filme)) {
    //         return $this->error('Entidade não encontrada!');
    //     }

    //     return $this->success(
    //         $filme->classificacao
    //     );
    // }
}
