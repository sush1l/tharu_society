<?php

namespace App\Http\Requests\TrainingCategory;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrainingCategoryRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'title_en' => ['required','string']
        ];
    }
}
