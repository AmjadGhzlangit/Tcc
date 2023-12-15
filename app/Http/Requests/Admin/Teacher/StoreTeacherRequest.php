<?php

namespace App\Http\Requests\Admin\Tracher;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
{
  
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'teacher_number' => ['required', 'string'],
            'teacher_name' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'email'],
            'major' => ['required', 'string'],
            'contract_type' => ['required', 'string'],
        ];
    }
}
