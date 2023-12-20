<?php

namespace App\Http\Requests\MembershipCategory;

use Illuminate\Foundation\Http\FormRequest;

class StoreMembershipCategoryRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required', 'string']
        ];
    }
}
