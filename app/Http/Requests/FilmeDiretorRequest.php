<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmeDiretorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'filme_id'   => 'required|exists:filmes,id',
            'diretor_id' => 'required|exists:diretores,id'
        ];
    }
}
