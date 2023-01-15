<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilmeAtorRequest;
use App\Http\Requests\FilmeRequest;
use App\Services\FilmeAtor;
use Illuminate\Http\Request;

class FilmeAtorController extends Controller
{
    private FilmeAtor $service;

    public function __construct(FilmeAtor $filmeAtor)
    {
        $this->service = $filmeAtor;
    }

    public function index(int $id)
    {
        return response()->json(
            $this->service->atores($id)
        );
    }

    public function store(FilmeAtorRequest $request)
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
