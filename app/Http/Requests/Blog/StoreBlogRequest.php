<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required','string','max:255'],
            'image' => ['required','image'],
            'date' => ['required'],
            'publish' => ['required'],
            'description' => ['nullable'],
        ];
    }
}
