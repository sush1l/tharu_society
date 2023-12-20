<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMembershipJoinRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'full_name' => ['required', 'string'],
            'contact_no' =>['required', 'required', 'integer', 'min:9'],
            'address' => ['required', 'string'],
            'email' => ['required', 'email']
        ];
    }
}
