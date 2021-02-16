<?php

namespace App\Http\Requests;

class UserRequest extends AbstractRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'email'  => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome é obrigatório',
            'email.required' => 'O Email é obrigatório'
        ];
    }
}
