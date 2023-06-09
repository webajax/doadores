<?php

namespace App\Http\Requests\Doadores;

use Illuminate\Foundation\Http\FormRequest;

class CreateDoadoresRequest extends FormRequest
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
            'nome'  =>[
                'required',
                'string',
            ] ,
            'cpf' => [
                'required',
                'string'
             ],
            'email' => [
                'string'
            ],
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é Obrigatório',
            'email.required' => 'O campo Email é obrigatório',
        ];
    }
}
