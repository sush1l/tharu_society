<?php

namespace App\Http\Requests\EventDetail;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventDetailRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required', 'string'],
            'photo' => ['required', 'image', 'mimes:png,jpg,jpeg'],
            'desc' => ['required'],
        ];
    }
}
