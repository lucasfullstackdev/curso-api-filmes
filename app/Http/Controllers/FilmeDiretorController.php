<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilmeDiretorRequest;
use App\Services\FilmeDiretor;

class FilmeDiretorController extends Controller
{
    private FilmeDiretor $service;

    public function __construct(FilmeDiretor $filmeDiretor)
    {
        $this->service = $filmeDiretor;
    }

    public function index(int $id)
    {
        return response()->json(
            $this->service->diretores($id)
        );
    }

    public function store(FilmeDiretorRequest $request)
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
