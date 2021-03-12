<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => ['required', 'max:50'],
            'lastname' => ['required', 'max:150'],
            'email' => ['required', 'max:50', 'email'],
            'phone' => ['required', 'max:150']
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nombre',
            'lastname' => 'Apellidos',
            'email' => 'Correo',
            'phone' => 'Telefono',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Agrege un nombre al :attribute',
            'name.max' => 'El nombre es muy largo',

            'lastname.required' => 'Agrege un nombre al :attribute',
            'lastname.max' => 'El nombre es muy largo',

            'email.required' => 'Agrege el :attribute',
            'email.max' => 'El :attribute es muy largo',
            'email.email' => 'Ingrese el :attribute',

            'phone.required' => 'Agrege el :attribute',
            'phone.max' => 'El :attribute es muy largo',
        ];
    }
}
