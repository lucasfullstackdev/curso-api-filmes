<?php

namespace App\Services;

use App\Models\Filme;
use App\Models\FilmeGenero as ModelsFilmeGenero;
use Illuminate\Foundation\Http\FormRequest;

class FilmeGenero extends Service implements IService
{
    protected $model = Filme::class;

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

    public function store(FormRequest $request)
    {
        $filmeAtor = ModelsFilmeGenero::create($request->all());

        return $this->success($filmeAtor);
    }

    public function destroy(int $id)
    {
        $filmeAtor = ModelsFilmeGenero::find($id);

        if (empty($filmeAtor)) {
            return $this->error('Entidade não encontrada!');
        }

        $filmeAtor->delete();

        return $this->success($filmeAtor);
    }
}
