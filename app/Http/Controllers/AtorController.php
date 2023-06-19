<?php

namespace App\Http\Controllers;

use App\Http\Requests\AtorRequest;
use App\Services\Ator;

class AtorController extends Controller
{
    private Ator $service;

    public function __construct(Ator $ator)
    {
        $this->service = $ator;
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

    public function store(AtorRequest $request)
    {
        return response()->json(
            $this->service->store($request)
        );
    }

    public function update(AtorRequest $request, $id)
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
