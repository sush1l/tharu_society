<?php

namespace App\Http\Requests\TikTok;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTikTokRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'title' => ['required'],
            'title_en' => ['required'],
            'slug' => ['required','alpha_dash',Rule::unique('tik_toks','slug')->withoutTrashed()],
            'video' => ['required'],
        ];
    }
}
