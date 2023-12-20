<?php

namespace App\Http\Requests\Report;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateReportRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required','string'],
            'title_en' => ['required', 'string'],
            'date' => ['required', 'string'],
            'description' =>['nullable'],
            'description_en' => ['nullable'],
            'file' => ['required'],
            'report_category_id' => ['nullable', Rule::exists('report_categories', 'id')->withoutTrashed()],
        ];
    }
}
