<?php

namespace App\Http\Requests\Admin\DailySchedule;

use Illuminate\Foundation\Http\FormRequest;

class StoreDailyScheduleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'day_name' => ['required', 'string', 'max:255'],
            'course_id' => ['required', 'exists:courses,id'],
            'teacher_id' => ['required', 'exists:teachers,id'],
            'location' => ['required', 'string', 'max:255'],
            'department' => ['required', 'string', 'max:255'],
            'start_time' => ['required', 'date_format:H:i'],
            'end_time' => ['required', 'date_format:H:i', 'after:start_time'],
        ];
    }
}
