<?php

namespace App\Http\Requests\TikTok;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTikTokRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title_en' => ['required'],
            'title' => ['required'],
            'video' => ['required'],
            'slug' => ['required', 'alpha_dash', Rule::unique('tik_toks', 'slug')->withoutTrashed()->ignore($this->tikTok)],
        ];
    }
}
