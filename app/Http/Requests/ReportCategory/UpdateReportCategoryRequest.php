<?php

namespace App\Http\Requests\ReportCategory;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReportCategoryRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required', 'string'],
            'title_en' => ['required', 'string']
        ];
    }
}
