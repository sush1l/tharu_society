<?php

namespace App\Http\Requests\WorkCaategory;

use Illuminate\Foundation\Http\FormRequest;

class StoreWorkCategoryRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required', 'string'],
            'title_en' => ['required','string']
        ];
    }
}
