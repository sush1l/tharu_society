<?php

namespace App\Http\Requests\Work;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateWorkRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required','string','max:255'],
            'title_en' => ['required','string','max:255'],
            'description' => ['nullable'],
            'description_en' => ['nullable'],
            'image' => ['required','image'],
            'work_category_id' => ['nullable', Rule::exists('work_categories', 'id')->withoutTrashed()],

        ];
    }
}
