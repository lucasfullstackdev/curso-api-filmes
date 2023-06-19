<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmeRequest extends FormRequest
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
            'titulo'           => 'required|string|min:3',
            'lancamento_at'    => 'required|date',
            'duracao'          => 'required|integer',
            'classificacao_id' => 'required|exists:classificacoes,id',
            'sinopse'          => 'required|string|min:10'
        ];
    }
}
