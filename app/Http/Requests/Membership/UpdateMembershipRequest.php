<?php

namespace App\Http\Requests\Membership;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMembershipRequest extends FormRequest
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
