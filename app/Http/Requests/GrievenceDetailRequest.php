<?php

namespace App\Http\Requests;

// use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class GrievenceDetailRequest extends FormRequest
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
        // 'user_id' => Auth::user()->id,
        'cosultations_id' => 'required|integer|exists:consultations,id',
        'diseases_id' => 'required|integer|exists:diseases,id'
        ];
    }
}
