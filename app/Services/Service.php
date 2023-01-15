<?php

namespace App\Services;

use Illuminate\Foundation\Http\FormRequest;

abstract class Service
{
    protected $model;

    public function paginate()
    {
    }

    public function all()
    {
        return $this->success(
            $this->model::all()
        );
    }

    public function show(int $id)
    {
        $entidade = $this->model::find($id);

        if (empty($entidade)) {
            return $this->error('Entidade não encontrada!');
        }

        return $this->success($entidade);
    }

    public function destroy(int $id)
    {
        $entidade = $this->model::find($id);

        if (empty($entidade)) {
            return $this->error('Entidade não encontrada!');
        }

        $entidade->delete();

        return $this->success($entidade);
    }

    public function update(FormRequest $request, int $id)
    {
        $entidade = $this->model::find($id);

        if (empty($entidade)) {
            return $this->error('Entidade não encontrada!');
        }

        $entidade->update($request->all());

        return $this->success($entidade);
    }

    public function store(FormRequest $request)
    {
        try {
            $entidade = $this->model::create($request->all());
            return $this->success($entidade);
        } catch (\Throwable $th) {
            return $this->error('Ops! não conseguimos registrar a entidade! verifique as informações e tente novamente mais tarde');
        }
    }

    private function error(string $error): array
    {
        return [
            'success' => false,
            'error'   => $error
        ];
    }

    private function success($data): array
    {
        return [
            'success' => true,
            'data'    => $data
        ];
    }
}
