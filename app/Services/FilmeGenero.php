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
        $filmeGenero = ModelsFilmeGenero::create($request->all());

        return $this->success($filmeGenero);
    }

    public function destroy(int $id)
    {
        $filmeGenero = ModelsFilmeGenero::find($id);

        if (empty($filmeGenero)) {
            return $this->error('Entidade não encontrada!');
        }

        $filmeGenero->delete();

        return $this->success($filmeGenero);
    }
}
