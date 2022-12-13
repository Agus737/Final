<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarAlumno extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'txtname'=>'required',
            'txtcourse'=>'required',
            'txtaddress'=>'required',
            'txtmovile'=>'required|numeric|digits_between:10,10'
        ];
    }
}
