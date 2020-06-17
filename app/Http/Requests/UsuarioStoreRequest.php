<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioStoreRequest extends FormRequest
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
            'cedula' => 'required|max:20|unique:usuarios,id',
            'user' => 'required|max:100',
            'email' => 'required|max:50|email|unique:usuarios,email_cli',
            'phone' => 'required|digits:10',
            'password' => 'required|max:16|min:8|confirmed',
        ];
    }

    
    public function messages()
    {
        return[
            'cedula.unique' =>'Ya existe un usuario registrado con esa cedula',
            'phone.digits' =>'Telefono invalido.'
        ];
    }
    
}
