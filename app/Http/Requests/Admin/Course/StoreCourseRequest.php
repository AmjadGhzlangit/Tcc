<?php

namespace App\Http\Requests\Admin\Course;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'course_name' => ['required', 'string', 'max:255'],
            'courseable_type' => ['required', 'string'],
            'courseable_id' => ['required', 'numeric'],
            'year' => ['required', 'string'],
            'department' => ['required', 'string'],
            'semester' => ['required', 'string'],
        ];
    }
}
