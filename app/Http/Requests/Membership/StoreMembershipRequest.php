<?php

namespace App\Http\Requests\Membership;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreMembershipRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'membership_category_id' => ['nullable', Rule::exists('membership_categories', 'id')->withoutTrashed()],
            'title' => ['required', 'string'],
            'photo' => ['required', 'image', 'mimes:png,jpg,jpeg'],
            'desc' => ['required'],
            'position' => ['nullable', 'integer']
        ];
    }
}
