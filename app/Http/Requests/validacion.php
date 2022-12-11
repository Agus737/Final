<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validacion extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "txtname"=>"required",
            "txtcourse"=>"required",
            "txtaddress"=>"required",
            "txtmovile"=>"required"
        ];
    }
}
