<?php

namespace App\Http\Requests\EventDetail;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventDetailRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required', 'string'],
            'photo' => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
            'desc' => ['required'],
        ];
    }
}
