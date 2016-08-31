<?php

namespace FlAssociates\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusinessRequest extends FormRequest
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
            'cnpj' => "required|digits:14|unique:businesses,cnpj,{$this->get('id')}",
            'name' => 'required|min:3|max:100'
        ];
    }

    public function messages()
    {
        return [
            'cnpj.required' => 'O CNPJ é obrigatório.',
            'cnpj.digits' => 'O CNPJ deve ter 14 (catorze) dígitos.',
            'cnpj.unique' => 'O CNPJ informado já existe no sistema.',

            'name.required' => 'O NOME é obrigatório.',
            'name.min' => 'O NOME deve ter, no mínimo 3, (três) caracteres.',
            'name.max' => 'O NOME deve ter, no máximo 100, (cem) caracteres.'
        ];
    }

}
