<?php

namespace FlAssociates\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:3|max:60',
            'email' => "required|email|unique:users,email,{$this->get('id')}",
            'password' => 'required|min:5|max:20',
            'password-confirm' => 'same:password'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O NOME é obrigatório',
            'name.min' => 'O NOME deve ter, no mínimo, 3 (três) caracteres',
            'name.max' => 'O NOME deve ter, no máximo, 60 (sessenta) caracteres.',

            'email.required' => 'O E-MAIL é obrigatório.',
            'email.email' => 'O E-MAIL informado é inválido.',
            'email.unique' => 'O E-MAIL informado já existe no sistema.',

            'password.required' => 'A SENHA é obrigatória',
            'password.min' => 'A SENHA deve ter, no mínimo, 5 (cinco) caracteres.',
            'password.max' => 'A SENHA deve ter, no máximo, 20 (vinte) caracteres.',

            'password-confirm.same' => 'A SENHA e a CONFIRMAÇÃO DE SENHA devem ser iguais.'
        ];
    }
}
