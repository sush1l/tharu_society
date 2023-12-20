<?php

namespace App\Http\Requests\Training;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTrainingRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required','string','max:255'],
            'title_en' => ['required','string','max:255'],
            'instructor' => ['required','string'],
            'image' => ['required','image'],
            'date' => ['required'],
            'time' => ['required'],
            'price' => ['required'],
            'description' => ['nullable'],
            'description_en' => ['nullable'],
            'training_category_id' => ['nullable', Rule::exists('training_categories', 'id')->withoutTrashed()],
        ];
    }
}
