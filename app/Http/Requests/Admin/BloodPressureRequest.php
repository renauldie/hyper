<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BloodPressureRequest extends FormRequest
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
        return [
        'classification' => 'required|max:30',
        'sistolic_start' => 'required|integer|max:290',
        'sistolic_end' => 'required|integer|max:290',
        'diastolic_start' => 'required|integer|max:290',
        'diastolic_end' => 'required|integer|max:290',
        'description' => 'required|string'
        ];
    }
}
