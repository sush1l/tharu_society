<?php

namespace App\Http\Requests\Popup;

use Illuminate\Foundation\Http\FormRequest;

class StorePopupRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required'],
            'image' => ['required', 'mimes:png,jpg,jpeg'],
            'date' => ['required'],
        ];
    }
}
