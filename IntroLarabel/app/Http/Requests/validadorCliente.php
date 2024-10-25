<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class validadorCliente extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtNombre'=> 'required|min:4|max:200',
            'txtApellido'=> 'required|min:5|max:20',
            'txtCorreo'=> 'required|email:dns|min:5|max:20',
            'txtTelefono'=> 'required|numeric'
            //
        ];
    }
}
