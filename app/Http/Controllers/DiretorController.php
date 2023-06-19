<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiretorRequest;
use App\Services\Diretor;

class DiretorController extends Controller
{
    private Diretor $service;

    public function __construct(Diretor $diretor)
    {
        $this->service = $diretor;
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

    public function store(DiretorRequest $request)
    {
        return response()->json(
            $this->service->store($request)
        );
    }

    public function update(DiretorRequest $request, $id)
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
