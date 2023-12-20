<?php

namespace App\Http\Requests\Announcement;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAnnouncementRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required', 'string'],
            'title_en' => ['required','string'],
            'image' => ['required','image'],
            'date' => ['required', 'string']
        ];
    }
}
