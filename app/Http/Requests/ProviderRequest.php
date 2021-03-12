<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProviderRequest extends FormRequest
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
            'business_n' => ['required', 'max:50'],
            'phone' => ['required', 'max:50'],
            'email' => ['required', 'max:150'],
            'rfc' => ['required', 'max:150'],
        ];
    }

    public function attributes () {
        return [
            'business_n' => 'Razón Social',
            'phone' => 'Telefono',
            'email' => 'Correo',
            'rfc' => 'RFC'
        ];
    }

    public function messages () {
        return [
            'business_n.required' => 'Agrege un nombre al :attribute',
            'business_n.max' => 'El nombre es muy largo',

            'phone.required' => 'Agrege un numero al :attribute',
            'phone.max' => 'Es un numero muy grande',

            'email.required' => 'Agrege una dirección de :attribute',
            'email.max' => 'Intenta con otro correo',

            'rfc.required' => 'Agrege su :attribute',
            'rfc.max' => 'El :attribute es muy grande',
        ];
    }
}
