<?php

namespace App\Http\Requests\Job;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreJobRequest extends FormRequest
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
            'address' => ['required', 'string'],
            'image' => ['nullable','image'],
            'salary' => ['nullable','string'],
            'date' => ['required'],
            'end_date' => ['required'],
            'description' => ['required'],
            'position' => ['nullable', 'integer']
        ];
    }
}
