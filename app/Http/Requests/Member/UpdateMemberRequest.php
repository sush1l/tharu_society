<?php

namespace App\Http\Requests\Member;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateMemberRequest extends FormRequest
{

    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'membership_category_id' => ['nullable', Rule::exists('membership_categories', 'id')->withoutTrashed()],
            'title' => ['required', 'string'],
            'photo' => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
            'position' => ['nullable', 'integer']
        ];
    }
}
