<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartyRequest extends FormRequest
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
            'customer_id' => ['required', 'integer'],
            'package_id' => ['required', 'integer'],
            'date' => ['required', 'date'],
            'kid' => ['required', 'integer'],
        ];
    }

    public function attributes () {
        return [
            'customer_id' => 'Cliente',
            'package_id' => 'Paquete',
            'date' => 'Fecha',
            'kid' => 'Niños',
        ];
    }

    public function messages () {
        return [
            'customer_id.required' => 'Agrege un nombre al :attribute',
            'customer_id.integer' => 'Error al seleccionar :attribute',

            'package_id.required' => 'Agrege un nombre al :attribute',
            'package_id.integer' => 'Error al seleccionar :attribute',

            'date.required' => 'Agrege una :attribute',
            'date.date' => 'Error al seleccionar la :attribute',

            'kid.required' => 'Agrege un numero al :attribute',
            'kid.integer' => 'Valor no valido',
        ];
    }
}
