<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilmeRequest;
use App\Services\Filme;

class FilmeController extends Controller
{
    private Filme $service;

    public function __construct(Filme $filme)
    {
        $this->service = $filme;
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

    public function store(FilmeRequest $request)
    {
        return response()->json(
            $this->service->store($request)
        );
    }

    public function update(FilmeRequest $request, $id)
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
