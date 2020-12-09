<?php

namespace App\Http\Requests;

// use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class GrievenceRequest extends FormRequest
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
        //  'user_id' => 'required',
        'blood_pressure' => 'required|integer',
        'body_weight' => 'required|integer',
        'ages' => 'required|integer'
        ];
    }
}
