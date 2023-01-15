<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeneroRequest;
use App\Services\Genero;

class GenerosController extends Controller
{
    private Genero $service;

    public function __construct(Genero $genero)
    {
        $this->service = $genero;
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

    public function store(GeneroRequest $request)
    {
        return response()->json(
            $this->service->store($request)
        );
    }

    public function update(GeneroRequest $request, $id)
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
