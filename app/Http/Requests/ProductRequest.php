<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'code' => ['required', 'max:150'],
            'price' => ['required'],
            'amount' => ['required', 'integer'],
            'description' => ['required', 'max:150'],
            'provider_id' => ['required', 'integer'],
        ];
    }

    public function attributes () {
        return [
            'name' => 'Producto',
            'code' => 'Codigo',
            'price' => 'Precio',
            'amount' => 'Existencia',
            'description' => 'Descripción',
            'provider_id' => 'Proveedor',
        ];
    }

    public function messages () {
        return [
            'name.required' => 'Agrege un nombre al :attribute',
            'name.max' => 'El :attribute es muy largo',

            'code.required' => 'Agrege el :attribute',
            'code.max' => 'El :attribute es muy largo', 

            'price.required' => 'Agrege el :attribute',

            'amount.required' => 'Agrege la :attribute',
            'amount.max' => 'El :attribute es muy largo',

            'description.required' => 'Agrege la :attribute',
            'description.max' => 'La :attribute es muy largo',

            'provider_id.required' => 'Seleccione un :attribute',
            'provider_id.integer' => 'Error al seleccionar :attribute',
        ];
    }
}
