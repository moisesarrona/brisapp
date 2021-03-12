<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
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
            'discount' => ['required', 'regex:/^\d*(\.\d{1,2})?$/'],
            'invitation' => ['required', 'integer'],
            'key' => ['required', 'integer'],
            'ticket' => ['required', 'integer'],
            'price_lm' => ['required', 'regex:/^\d*(\.\d{1,2})?$/'],
            'price_jv' => ['required', 'regex:/^\d*(\.\d{1,2})?$/'],
            'price_sd' => ['required', 'regex:/^\d*(\.\d{1,2})?$/'],
            'price_e' => ['required', 'regex:/^\d*(\.\d{1,2})?$/'],
        ];
    }

    public function attributes () {
        return [
            'name' => 'Paquete',
            'discount' => 'Decuento',
            'invitation' => 'Invitación',
            'key' => 'Llaves',
            'ticket' => 'Boletos',
            'price_lm' => 'Precio Lunes-Miercoles',
            'price_jv' => 'Precio Jueves-Viernes',
            'price_sd' => 'Precio Sabado-Domingo',
            'price_e' => 'Precio Extra',
        ];
    }

    public function messages () {
        return [
            'name.required' => 'Agrege un nombre al :attribute',
            'name.max' => 'El nombre es muy largo',

            'discount.required' => 'Agrege una canidad al :attribute',
            'discount.integer' => 'Introduce numeros',

            'invitation.required' => 'Agrege un cantidad al :attribute',
            'invitation.integer' => 'Introduce numeros',

            'key.required' => 'Agrege una canidad al :attribute',
            'key.integer' => 'Introduce numeros',

            'ticket.required' => 'Agrege una cantidad al :attribute',
            'ticket.integer' => 'Introduce numeros',

            'price_lm.required' => 'Agrege una canidad al :attribute',
            'price_lm.regex' => 'Introduce numeros',

            'price_jv.required' => 'Agrege una canidad al :attribute',
            'price_jv.regex' => 'El nombre es muy largo',

            'price_sd.required' => 'Agrege una canidad al :attribute',
            'price_sd.regex' => 'Introduce numeros',

            'price_e.required' => 'Agrege una canidad al :attribute',
            'price_e.regex' => 'Introduce numeros',
        ];
    }
}
