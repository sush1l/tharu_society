<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreMembershipJoinRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'country_id' => ['nullable', Rule::exists('countries', 'id')->withoutTrashed()],
            'full_name' => ['required', 'string'],
            'town' => ['required', 'string'],
            'state' => ['nullable', 'string'],
            'code' => ['required', 'string'],
            'contact_no' =>['required', 'required', 'integer', 'min:9'],
            'address' => ['required', 'string'],
            'email' => ['required', 'email'],
            'district' => ['nullable', 'string']
        ];
    }
}
