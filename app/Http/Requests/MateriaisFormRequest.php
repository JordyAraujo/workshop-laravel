<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MateriaisFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'nome.min' => 'O campo nome precisa ter pelo menos três caracteres'
        ];
    }
}
