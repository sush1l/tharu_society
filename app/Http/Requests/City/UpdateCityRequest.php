<?php

namespace App\Http\Requests\City;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCityRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required', 'string']
        ];
    }
}
