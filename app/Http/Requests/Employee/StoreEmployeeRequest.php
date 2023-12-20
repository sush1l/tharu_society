<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if(config('default.dual_language'))
        {
            return [
                'name' => ['required'],
                'name_en' => ['required'],
                'photo' => ['nullable', 'image'],
                'department_id' => ['nullable', Rule::exists('departments', 'id')->withoutTrashed()],
                'designation_id' => ['required', Rule::exists('designations', 'id')->withoutTrashed()],
                'level' => ['nullable'],
                'level_en' => ['nullable'],
                'phone' => ['nullable'],
                'email' => ['nullable'],
                'address' => ['nullable'],
                'address_en' => ['nullable'],
                'position' => ['nullable', 'integer'],
            ];
        }

        else

        {
            return [
                'name' => ['required'],
                'photo' => ['nullable', 'image'],
                'department_id' => ['nullable', Rule::exists('departments', 'id')->withoutTrashed()],
                'designation_id' => ['required', Rule::exists('designations', 'id')->withoutTrashed()],
                'level' => ['nullable'],
                'phone' => ['nullable'],
                'email' => ['nullable'],
                'address' => ['nullable'],
                'position' => ['nullable', 'integer'],
            ];
        }

    }
}
