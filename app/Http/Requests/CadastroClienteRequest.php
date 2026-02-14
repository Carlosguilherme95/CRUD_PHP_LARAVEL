<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastroClienteRequest extends FormRequest {

    public function authorize(): bool
    {
        return true;
    }

     public function rules(): array
    {
        return [
            'razao_social'   => ['required'],
            'nome_fantasia'  => ['required'],
            'cnpj'           => ['nullable'],
            'ie'             => ['nullable'],
            'endereco'       => ['nullable'],
        ];
    }

    public function messages(): array
    {
        return [
            'razao_social.required'  => 'O campo Razão Social é obrigatório',
            'nome_fantasia.required' => 'O campo Nome Fantasia é obrigatório',
        ];
    }
}