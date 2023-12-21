<?php

namespace App\Http\Requests\Membership;

use Illuminate\Foundation\Http\FormRequest;

class StoreMembershipRequest extends FormRequest
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
