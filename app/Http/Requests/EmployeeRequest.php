<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'birthdate' => ['required', 'date'],
            'sex' => ['required', 'max:50'],
            'phone' => ['required', 'max:150'],
            'email' => ['required', 'max:150', 'email'],
            'address' => ['required', 'max:150'],
            'nss' => ['required', 'max:150'],
            'curp' => ['required', 'max:150'],
            'marital_s' => ['required', 'max:150'],
            'salary_id' => ['required', 'integer'],
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nombre',
            'lastname' => 'Apellidos',
            'birthdate' => 'Fecha',
            'sex' => 'Sexo',
            'phone' => 'Telefono',
            'email' => 'Corroe',
            'address' => 'Direción',
            'nss' => 'NSS',
            'curp' => 'CURP',
            'marital_s' => 'Estado Civil',
            'salary_id' => 'Salario',            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Agrege un :attribute',
            'name.max' => 'El :attribute es muy largo',

            'lastname.required' => 'Agrege un :attribute',
            'lastname.max' => 'El :attribute es muy largo',

            'birthdate.required' => 'Agrege una :attribute',
            'birthdate.date' => 'Error al seleccionar la :attribute',

            'sex.required' => 'Agrege un :attribute',
            'sex.max' => 'La identidad es muy grande',

            'phone.required' => 'Agrege un :attribute',
            'phone.max' => 'El :attribute es muy largo',

            'email.required' => 'Agrege un :attribute',
            'email.max' => 'El :attribute es muy largo',
            'email.email' => 'Ingrese el :attribute',

            'address.required' => 'Agrege un :attribute',
            'address.max' => 'La :attribute es muy larga',

            'nss.required' => 'Agrege un :attribute',
            'nss.max' => 'El :attribute es muy largo',

            'curp.required' => 'Agrege un :attribute',
            'curp.max' => 'El :attribute es muy largo',

            'narital_s.required' => 'Agrege un :attribute',
            'narital_s.max' => 'El :attribute es muy largo',

            'salary_id.required' => 'Agrege un :attribute',
            'salary_id.integer' => 'Error al seleccionar :attribute',
        ];
    }
}
