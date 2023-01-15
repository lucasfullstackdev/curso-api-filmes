<?php

namespace App\Services;

use App\Models\Filme;
use App\Models\FilmeDiretor as ModelsFilmeDiretor;
use App\Models\FilmeGenero as ModelsFilmeGenero;
use Illuminate\Foundation\Http\FormRequest;

class FilmeDiretor extends Service implements IService
{
    protected $model = Filme::class;

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

    public function store(FormRequest $request)
    {
        $filmeDiretor = ModelsFilmeDiretor::create($request->all());

        return $this->success($filmeDiretor);
    }

    public function destroy(int $id)
    {
        $filmeDiretor = ModelsFilmeDiretor::find($id);

        if (empty($filmeDiretor)) {
            return $this->error('Entidade não encontrada!');
        }

        $filmeDiretor->delete();

        return $this->success($filmeDiretor);
    }
}
