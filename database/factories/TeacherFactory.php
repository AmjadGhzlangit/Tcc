<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'teacher_number' => $this->faker->unique()->numberBetween(1000, 9999),
            'teacher_name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'subject' => $this->faker->randomElement([
                'Programming 1',
                'Programming 2',
                'Mathematics 1',
                'Mathematics 2',
                'English 1',
                'Internet Technologies',
                'English 2',
            ]),
            'contract_type' => $this->faker->word,
            'image' => null, 
        ];
    }
}
