<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return
        [
            'course_name' => 'required|string',
            'course_category' => 'required|string',
            'description' => 'required|string',
            'teacher_name' =>'required|string',
            'course_fee' =>'required | string',
            'available_seats' => 'required',
            'schedule' => 'required',
        ];
    }
}
