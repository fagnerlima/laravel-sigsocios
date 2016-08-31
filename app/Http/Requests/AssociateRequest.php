<?php

namespace FlAssociates\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssociateRequest extends FormRequest
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
            'cpf' => "required|digits:11|unique:associates,cpf,{$this->get('id')}",
            'name' => 'required|min:3|max:60',
            'email' => "required|email|unique:associates,email,{$this->get('id')}",
            'business_id' => "required|numeric|exists:businesses,id"
        ];
    }

    public function messages()
    {
        return [
            'cpf.required' => 'O CPF é obrigatório',
            'cpf.digits' => 'O CPF deve ter 11 (onze) dígitos',
            'cpf.unique' => 'O CPF informado já existe no sistema',

            'name.required' => 'O NOME é obrigatório',
            'name.min' => 'O NOME deve ter, no mínimo, 3 (três) caracteres',
            'name.max' => 'O NOME deve ter, no máximo, 60 (sessenta) caracteres',

            'email.required' => 'O E-MAIL é obrigatório',
            'email.email' => 'O E-MAIL informado não é válido',
            'email.unique' => 'O E-MAIL informado já existe no sistema',

            'business_id.required' => 'A EMPRESA é obrigatória',
            'business_id.numeric' => 'O ID da EMPRESA deve ser informado',
            'business_id.exists' => 'A EMPRESA informada não existe no sistema'
        ];
    }
}
