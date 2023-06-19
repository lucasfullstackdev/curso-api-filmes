<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilmeGeneroRequest;
use App\Services\FilmeGenero;

class FilmeGeneroController extends Controller
{
    private FilmeGenero $service;

    public function __construct(FilmeGenero $filmeGenero)
    {
        $this->service = $filmeGenero;
    }

    public function index(int $id)
    {
        return response()->json(
            $this->service->generos($id)
        );
    }

    public function store(FilmeGeneroRequest $request)
    {
        return response()->json(
            $this->service->store($request)
        );
    }

    public function destroy(int $filme, int $id)
    {
        return response()->json(
            $this->service->destroy($id)
        );
    }
}
