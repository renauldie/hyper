<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MedicineRequest extends FormRequest
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
        'medicine_name' => 'required|string|max:255',
        'description' => 'required', 
        'max_usage' => 'required|string|max:255',
        'find_at_pharmacy' => 'required|string|max:255'
        ];
    }
}
