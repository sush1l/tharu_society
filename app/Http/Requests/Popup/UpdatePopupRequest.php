<?php

namespace App\Http\Requests\Popup;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePopupRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'=> ['required'],
            'image'=> ['nullable', 'mimes:png,jpg,jpeg'],
            'date' => ['required'],
        ];
    }
}
