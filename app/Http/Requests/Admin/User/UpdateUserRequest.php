<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['string', 'max:255'],
            'last_name' => ['string', 'max:255'],
            'father_name' => ['string', 'max:255'],
            'mother_name' => ['string', 'max:255'],
            'date_birth' => ['string'],
            'gender' => [],
            'address' => ['string', 'max:255'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'phone' => ['string'],
            'email' => ['email'],
            'password' => ['string','min:6'],
            'student_number' => ['string'],
            'student_email' => ['string','email'],
            'department' => ['string', 'max:255'],
            'status' => ['string', 'max:255'],
            'year' => ['string', 'max:255'],
            'semester' => ['string', 'max:255'],
        ];
    }
}
