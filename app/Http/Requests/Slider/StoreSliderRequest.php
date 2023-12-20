<?php

namespace App\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;

class StoreSliderRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['nullable'],
            'photo' => ['required', 'image', 'mimes:png,jpg,jpeg']
        ];
    }
}
