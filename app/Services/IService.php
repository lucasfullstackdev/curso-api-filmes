<?php

namespace App\Services;

use Illuminate\Foundation\Http\FormRequest;

interface IService
{
    public function paginate();
    public function all();
    public function show(int $id);
    public function update(FormRequest $request, int $id);
    public function store(FormRequest $request);
    public function destroy(int $int);
    public function find(int $id);
}
