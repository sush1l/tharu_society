<?php

namespace App\Http\Requests\Job;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateJobRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'add_city_id' => ['nullable', Rule::exists('add_cities', 'id')->withoutTrashed()],
            'title' => ['required', 'string'],
            'image' => ['required','image'],
            'date' => ['required'],
            'end_date' => ['required'],
            'description' => ['required'],
            'position' => ['nullable', 'integer']
        ];
    }
}
