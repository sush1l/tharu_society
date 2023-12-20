<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
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
            'image' => ['nullable','image'],
            'date' => ['required'],
            'description' => ['nullable'],
            'description_en' => ['nullable'],
        ];
    }
}
