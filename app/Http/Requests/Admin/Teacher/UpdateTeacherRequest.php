<?php

namespace App\Http\Requests\Admin\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeacherRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'teacher_number' => ['string'],
            'teacher_name' => ['string'],
            'phone' => ['string'],
            'email' => ['email'],
            'major' => ['string'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'contract_type' => ['string'],
        ];
    }
}
