<?php

namespace App\Http\Requests\Event;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required','string','max:255'],
            'venue' => ['nullable','string','max:255'],
            'image' => ['nullable','image'],
            'date' => ['nullable'],
            'video' => ['nullable'],
            'description' => ['nullable'],
        ];
    }
}
