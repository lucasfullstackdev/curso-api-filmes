<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClassificacaoRequest;
use App\Services\Classificacao;

class ClassificacaoController extends Controller
{
    private Classificacao $service;

    public function __construct(Classificacao $classificacao)
    {
        $this->service = $classificacao;
    }

    public function index()
    {
        return response()->json(
            $this->service->all()
        );
    }

    public function show($id)
    {
        return response()->json(
            $this->service->show($id)
        );
    }

    public function store(ClassificacaoRequest $request)
    {
        return response()->json(
            $this->service->store($request)
        );
    }

    public function update(ClassificacaoRequest $request, $id)
    {
        return response()->json(
            $this->service->update($request, $id)
        );
    }

    public function destroy($id)
    {
        return response()->json(
            $this->service->destroy($id)
        );
    }
}
