<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalaryRequest extends FormRequest
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
            'salary' => ['required', 'regex:/^\d*(\.\d{1,2})?$/'],
        ];
    }

    public function attributes () {
        return [
            'name' => 'Puesto',
            'salary' => 'Salario',
        ];
    }

    public function messages () {
        return [
            'name.required' => 'Agrege un nombre al :attribute',
            'name.max' => 'El nombre es muy largo',

            'salary.required' => 'Agrege una canidad al :attribute',
            'salary.integer' => 'Introduce numeros',
        ];
    }
}
