<?php

namespace App\Http\Requests\Admin\Course;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'course_name' => ['string', 'max:255'],
            'courseable_type' => ['string'],
            'courseable_id' => ['numeric'],
            'year' => ['string'],
            'department' => ['string'],
            'semester' => ['string'],
        ];
    }
}
